<?php

namespace App\Repositories;

use App\Interfaces\PostInterfaces;
use App\Services\Post\ByIdPostService;
use App\Services\Post\DeletePostService;
use App\Services\Post\EditPostService;
use App\Services\Post\GetPostService;
use App\Services\Post\StorePostService;

class PostRepository implements PostInterfaces {

    protected $getPostService, $storePostService, $deletePostService, $editPostService, $byIdPostService;

    public function __construct(
        GetPostService $getPostService, 
        StorePostService $storePostService, 
        DeletePostService $deletePostService,
        EditPostService $editPostService,
        ByIdPostService $byIdPostService
    )
    {
        $this->getPostService = $getPostService;
        $this->storePostService = $storePostService;
        $this->deletePostService = $deletePostService;
        $this->editPostService = $editPostService;
        $this->byIdPostService = $byIdPostService;
    }

    public function getPost()
    {
        // $result = $this->getPostService->getPostHttp();
        $result = $this->getPostService->getAllPostHttp();

        return $result;
    }

    public function storePost($request)
    {
        $result = $this->storePostService->storePostHttp($request);

        return $result;
    }

    public function byIdPost($id)
    {
        $result = $this->byIdPostService->byIdPostHttp($id);

        return $result;
    }

    public function updatePost($request, $id)
    {
        $result = $this->editPostService->updatePostHttp($request, $id);

        return $result;
    }

    public function deletePost($id)
    {
        $result = $this->deletePostService->deletePostHttp($id);

        return $result;
    }


}