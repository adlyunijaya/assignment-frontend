<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Http;

class StorePostService {

    public function storePostHttp($request)
    {
        // $request = json_encode($request->all());

        $result = Http::withToken(env('GO_REST_TOKEN'))
                        ->post('https://gorest.co.in/public-api/users/50/posts', [
                            'title' => $request->title,
                            'body' => $request->body
                        ]);

        return $result;
    }
}