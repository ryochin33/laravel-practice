<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'author_id' => 'required|integer',
        ]);
        Post::create($validated);
        return redirect()->route('posts.index')->with('success', '投稿が作成しました');
    }
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'author_id' => 'required|integer',
        ]);
        $post = Post::findOrFail($id);
        $post->update($validated);
        return redirect()->route('posts.show', $post->id)->with('success', '投稿が更新されました');
    }
}
