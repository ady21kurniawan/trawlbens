<?php

namespace App\Http\Repositories;

use Illuminate\Http\Request;
use App\Http\Traits\GuzzleTrait;

class MovieRepository
{
    use GuzzleTrait;

    public function search_movie($params)
    {
        $keyword = $params->only("movie_title");
        if(!count($keyword) || empty($keyword["movie_title"]) || is_null($keyword["movie_title"]) )
        {
            return new \Exception("movie title is required", 400);
        }
        $movie_title = $keyword["movie_title"];
        $result = $this->_get([
            "url" => "API/SearchTitle",
            "movie_title" => $movie_title
        ]);
        return json_decode($result->getBody()->getContents());
    }
}
