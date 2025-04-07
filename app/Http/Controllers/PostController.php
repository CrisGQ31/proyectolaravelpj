<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post = [];
    public function index()
    {
        return view('posts.index', [
            'posts' => $this->post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        dd($request->all());
    }
}
