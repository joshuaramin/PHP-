<?php

namespace App\Http\Controllers;

use Livewire\WithPagination;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {

        return view("user-account");
    }

    public function blog()
    {

        $posts = POST::with("user")->paginate(100);

        return view("user-blog", ['posts' => $posts]);
    }

    public function create()
    {
        return view("blog-create");;
    }

    public function edit($id)
    {

        $posts = Post::find($id);

        if (!$posts) {
            dd("No record");
        }

        return view("blog-edit", compact("posts"));
    }

    public function show($id)
    {
        $posts = Post::find($id);

        if (!$posts) {
            abort(404, "Post is not found");
        }

        return view("blog-show", compact("posts"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' =>
            'required|max:255',
            'description' => 'required|max:300|min:5',
        ]);


        $post = new Post([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user()->id
        ]);

        $post->save();

        return redirect()->route('blog.create')->with('success', 'Post Created Successfully.');
    }
}
