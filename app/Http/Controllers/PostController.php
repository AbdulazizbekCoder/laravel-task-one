<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        if($search != ""){
            $posts = Post::where('title', 'LIKE', "%$search")->get();
        }else{
            $posts = Post::all()->sortByDesc('id');
        }
        $data = compact('posts', 'search');
        return view('welcome')->with('posts', $posts)->with($data);
    }


    public function store(Request $request)
    {
        $task = Post::create([
            'user_id' => 2,
            'title' => $request['title'],
            'content' => $request['content'],
        ]);

        $task->save();

        return redirect()->route('index');
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $title = $request->get('title');
        $content = $request->get('content');

        $post->title = $title;
        $post->content = $content;
        $post->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $posts = Post::all();

        $post = Post::find($id);
        return view('edit')->with([
            'post' => $post,
            'posts' => $posts
        ]);
    }


    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('index');


    }

}
