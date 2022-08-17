<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\MovieRepository;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->repo = new MovieRepository();
    }

    /**
     * @OA\POST(
     *     path="/api/v1/search_movie",
     *     tags={"search movie"},
     *     @OA\Parameter(name="movie_title",required=true, in="query", description="search by movie title", example="x-men"), 
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */

    public function search(Request $req)
    {
        $result = $this->repo->search_movie($req);
        if( ! count($result->results) )
        {
            $this->set_message("movie not found");
        }
        return $this->response_json($result->results);
    }
}
