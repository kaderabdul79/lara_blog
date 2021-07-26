<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data = [];
        $data['site_title'] = "Practice Blog Site";
        $data['current_time'] = '23-07-22';
        $data['links'] = [
            'Facebook' => 'https://www.facebook.com',
            'Github' => 'https://www.github.com',
            'Youtube' => 'https://www.youtube.com',
            'Google' => 'https://www.google.com',
            'Gmail' => 'https://www.gmail.com'
        ];
        //$data['posts'] = Post::paginate(1);
        $data['posts'] = Post::Simplepaginate(1);
        return view('post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data = [];
        // $data['site_title'] = "Practice Blog Site";
        // $data['current_time'] = '23-07-22';
        // $data['links'] = [
        //     'Facebook' => 'https://www.facebook.com',
        //     'Github' => 'https://www.github.com',
        //     'Youtube' => 'https://www.youtube.com',
        //     'Google' => 'https://www.google.com',
        //     'Gmail' => 'https://www.gmail.com'
        // ];
        // $data['post'] = Post::all();
        // return view('post.index',$data);
        //return "hi";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $data = [];
    //     $data['site_title'] = "Practice Blog Site";
    //     $data['current_time'] = '23-07-22';
    //     $data['links'] = [
    //         'Facebook' => 'https://www.facebook.com',
    //         'Github' => 'https://www.github.com',
    //         'Youtube' => 'https://www.youtube.com',
    //         'Google' => 'https://www.google.com',
    //         'Gmail' => 'https://www.gmail.com'
    //     ];
    //     $data['post'] = Post::all();
    //     return view('post.create');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
