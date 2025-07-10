<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(PostRequest $request)
    {
        $validated = $request->validated();
        Post::create($validated);
        return redirect()->route('posts.index')->with('success', '投稿が作成されました');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(PostRequest $request, $id)
    {
        $validated = $request->validated();
        $post = Post::findOrFail($id);
        $post->update($validated);
        return redirect()->route('posts.show', $post->id)->with('success', '投稿が更新されました');
    }
}
