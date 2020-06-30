<?php

namespace App\Http\Controllers;

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
        $post = Tag::where('id', $id)->first();

        if (!$post) {
            abort(404);
        }

        return Response::json($post);
    }
}
