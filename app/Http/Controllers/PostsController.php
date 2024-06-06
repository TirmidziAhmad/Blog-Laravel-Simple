<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postsTxt = Storage::get("public\posts.txt");
        $postsTxtIntoArr = explode ("\n", $postsTxt);
        return view('posts.index', compact('postsTxtIntoArr'));
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

        $view_data = Storage::get("public\posts.txt");
        $view_data_into_arr = explode ("\n", $view_data);

        $new_post = [
            $id = count($view_data_into_arr) + 1,
            $title ,
            $content,
            date('Y-m-d H:i:s')
        ];

        $new_post = implode(",", $new_post);
        array_push($view_data_into_arr, $new_post);
        $posts = implode("\n", $view_data_into_arr);
        Storage::put('public/posts.txt', $posts);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $postsTxt = storage::get('public/posts.txt');

        $postsTxtIntoArr = explode ("\n", $postsTxt);

        $view_data = explode(",", $postsTxtIntoArr[$id]);

        return view('posts.show', compact('view_data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
