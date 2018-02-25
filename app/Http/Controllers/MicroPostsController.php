<?php

namespace App\Http\Controllers;

use App\MicroPost;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class MicroPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mposts = MicroPost::all();
        return view('dash.posts.index', compact('mposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash.posts.create');
//        return MicroPost::create([
//            'title' => $data['title'],
//            'body' => $data['body'],
//            'image' => $data['image']
//        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MicroPost  $microPost
     * @return \Illuminate\Http\Response
     */
    public function show(MicroPost $microPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MicroPost  $microPost
     * @return \Illuminate\Http\Response
     */
    public function edit(MicroPost $microPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MicroPost  $microPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MicroPost $microPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MicroPost  $microPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(MicroPost $microPost)
    {
        //
    }
}
