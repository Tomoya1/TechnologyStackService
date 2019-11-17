<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::paginate(5);
        return view('post.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('post.show', ['post' => $post]);
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('posts');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('post.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        // idで適切なレコードを取得する
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('posts');
    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();
        $post->delete();

        return redirect('posts');
    }
}
