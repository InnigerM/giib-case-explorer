<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return Response::json($posts);
    }

    public function favorite()
    {
        $posts = Post::all()->skip(0)->take(6);
        return Response::json($posts);
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();

        if (!$post) {
            abort(404);
        }

        return Response::json($post);
    }

    public function filter($tag)
    {
        $posts = Post::where('tag', $tag)->get();
        return Response::json($posts);
    }

    public function store()
    {
        $post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->image_link = request('image_link');
        $post->save();

        return redirect('/cases');
    }

    public function tags($id)
    {
        $post = Post::where('id', $id)->first();
        $tags = $post->tags;

        return Response::json($tags);
    }

    public function paragraphs($id)
    {
        $post = Post::where('id', $id)->first();
        $paragraphs = $post->paragraphs;

        return Response::json($paragraphs);
    }

    public function businessCanvas($id)
    {
        $post = Post::where('id', $id)->first();
        $businessCanvas = $post->businessCanvas;

        return Response::json($businessCanvas);
    }

    public function update()
    {

    }
}
