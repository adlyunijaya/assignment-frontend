<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Http;

class DeletePostService {

    public function deletePostHttp($id)
    {
        $result = Http::withToken(env('GO_REST_TOKEN'))
                        ->delete('https://gorest.co.in/public-api/posts/'. $id);

        $responseBody = json_decode($result->body());

        if($responseBody->code == '204'){
            return redirect()->route('main.post')->with('success', 'Post Deleted');
        }

        return redirect()->route('main.post')->with('success', 'Internal Error');
    }
}