<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Http;

class EditPostService {

    public function updatePostHttp($request, $id){

        $result = Http::withToken(env('GO_REST_TOKEN'))
                        ->patch('https://gorest.co.in/public-api/posts/'. $id, [
                            'title' => $request->title,
                            'body' => $request->body
                        ]);

        $responseBody = json_decode($result->body());

        if($responseBody->code == '200'){
            return redirect()->route('main.post')->with('success', 'Post Updated');
        }

        return redirect()->route('main.post')->with('success', 'Internal Error');
                        
    }
}