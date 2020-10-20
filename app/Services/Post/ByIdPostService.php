<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Http;

class ByIdPostService {

    public function byIdPostHttp($id)
    {
        $result = Http::withToken(env('GO_REST_TOKEN'))
                        ->get('https://gorest.co.in/public-api/posts/'. $id);

        $responseBody = json_decode($result->body());

        if($responseBody->code == '200'){
            return view('posts.edit', compact('responseBody'));
        }

        return redirect()->route('main.post')->with('success', 'Internal Error');
    }
}