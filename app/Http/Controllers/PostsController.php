<?php

namespace App\Http\Controllers;

use App\Interfaces\PostInterfaces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostsController extends Controller
{

    protected $postInterface;

    public function __construct(PostInterfaces $postInterface)
    {
        $this->postInterface = $postInterface;
    }

    public function index()
    {
        $results = $this->postInterface->getPost();

        $paginations = $results['meta']['pagination'];
        $datas = $results['data'];

        return view('posts.main', compact('datas', 'paginations'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $result = $this->postInterface->storePost($request);

        return redirect()->route('main.post');
    }

    public function destroy($id){
        $result = $this->postInterface->deletePost($id);

        return $result;
    }

    public function edit($id)
    {
        $result = $this->postInterface->byIdPost($id);

        return $result;
    }
    
    public function update(Request $request, $id)
    {
        $result = $this->postInterface->updatePost($request, $id);

        return $result;
    }

    public function dataTable() 
    {
        $response = Http::withToken(env('GO_REST_TOKEN'))
                        ->get('https://gorest.co.in/public-api/posts');

        $resData = $response->json();

        $data = array(
            'draw' => $resData['meta']['pagination']['page'],
            'recordsTotal' => $resData['meta']['pagination']['total'],
            'recordsFiltered' => $resData['meta']['pagination']['limit'],
            'data' => $resData['data'],
        );

        echo json_encode($data);

        // // dd($resData);
        // return $resData;
    }
}
