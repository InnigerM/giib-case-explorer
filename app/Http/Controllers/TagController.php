<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return Response::json($tags);
    }

    public function show($id)
    {
        $tag = Tag::where('id', $id)->first();

        if (!$tag) {
            abort(404);
        }

        return Response::json($tag);
    }

    public function getArticles($id)
    {
        $tag = Tag::where('id', $id)->first();
        $articles = $tag->posts;

        if (!$articles) {
            abort(404);
        }

        return Response::json($articles);
    }
}
