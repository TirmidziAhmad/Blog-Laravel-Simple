<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use app\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::active()->get();
        return view('posts.index', ['posts' => $posts]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        
        DB::table('posts')->insert([
            'title'=> $title,
            'content'=> $content,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = DB::table('posts')->where('id', $id)->get();
        return view('posts.show', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table('posts')->where('id', $id)->get();
        return view('posts.edit', ['posts' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        
        DB::table('posts')->where('id', $id)->update([
            'title'=> $title,
            'content'=> $content,
            'updated_at' => now()
        ]);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return redirect('/posts');
    }
}
