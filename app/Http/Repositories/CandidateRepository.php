<?php

namespace App\Http\Repositories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateRepository
{
    public function __construct( \App\Models\Candidates $model)
    {
        $this->model = $model;
    }

    public function getListsCandidate()
    {
        return $this->model::get()->toArray();
    }

    public function find_candidate($params)
    {
        if(!count($params) || empty($params["keyword"]) || is_null($params["keyword"]) )
        {
            return new \Exception("keyword is required", 400);
        }

        $result = $this->model
            ->where("name","ilike", "{$params["keyword"]}%")
            ->orWhere("email", "ilike", "{$params["keyword"]}%")
            ->orWhere("phone","ilike","{$params["keyword"]}%")
            ->get()
            ->toarray()
        ;
        return $result;    
    }
}
