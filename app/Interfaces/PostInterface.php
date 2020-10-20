<?php

namespace App\Interfaces;

interface PostInterfaces {

    public function getPost();

    public function storePost($request);

    public function deletePost($id);

    public function byIdPost($id);

    public function updatePost($request, $id);
}