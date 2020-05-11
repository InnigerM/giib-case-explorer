<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return Response::json($posts);
    }

    public function show($id) {
        $post = Post::where('id', $id)->first();

        if(!$post) {
            abort(404);
        }

        return Response::json($post);
    }

    public function store(){
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->image_link = request('image_link');
        $post->save();

        return redirect('/cases');
    }

    public function update() {

    }
}
