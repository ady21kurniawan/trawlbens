<?php

namespace App\Http\Traits;

use Illuminate\Http\Request;

trait GuzzleTrait
{
    public function __construct()
    {
        $this->host = config('app.imdb_api_host');
        $this->token = config('app.imdb_api_token');
        $this->client = new \GuzzleHttp\Client(['verify' => false ]);
    }

    public function _get($params)
    {
        $response = $this->client->request('GET', "{$this->host}/{$params['url']}/{$this->token}/{$params['movie_title']}");
        return $response;
    }
}
