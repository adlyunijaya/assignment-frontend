<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Http;

class GetPostService
{

    public function getPostHttp()
    {

        $response = Http::withToken(env('GO_REST_TOKEN'))
                        ->get('https://gorest.co.in/public-api/users/50/posts');

        $resData = $response->json();

        // dd($resData);
        return $resData;
    }

    public function getAllPostHttp()
    {
        $response = Http::withToken(env('GO_REST_TOKEN'))
                        ->get('https://gorest.co.in/public-api/posts');

        $resData = $response->json();

        // dd($resData);
        return $resData;
    }
}
