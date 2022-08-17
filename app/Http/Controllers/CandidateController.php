<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;
use App\Http\Repositories\CandidateRepository;

/**
 * @OA\Info(title="TRAWLBENS DOCUMENTATION", version="0.1")
 */


class CandidateController extends Controller
{
    private $repo;

    public function __construct()
    {
        $this->repo = new CandidateRepository( new \App\Models\Candidates );
    }

    /**
     * @OA\Get(
     *     path="/api/v1/candidate",
     *      tags={"list candidate"},
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */

    public function lists()
    {
       $data = $this->repo->getListsCandidate();
       return $this->response_json($data);        
    }

    /**
     * @OA\POST(
     *     path="/api/v1/search_candidate",
     *     tags={"search candidate"},
     *     @OA\Parameter(name="keyword",required=true, in="query", description="search by name or email or phone", example="vacant1@gmail.com"), 
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */

    public function search(Request $req)
    {
        $params = $req->only("keyword");
        $data = $this->repo->find_candidate($params);
        if( $data instanceof \Exception)
        {
            return $this->response_json([],$data->getCode(),$data->getMessage());
        }
        return $this->response_json($data);    
    }
}
