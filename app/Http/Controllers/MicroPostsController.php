<?php

namespace App\Http\Controllers;

use App\MicroPost;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
        $data = $request->all();
        $file = $request->file('img_');
        $data['img_'] = $this->imageResizer($file);
        MicroPost::create([
            'title' => $data['title'],
            'body' => $data['body'],
            'image' => $data['img_']
        ]);
        return redirect(route('micropost.index'));
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
    public function imageResizer($file){
        $image = Image::make($file);
        $image->resize(500,325);
        $thumbnail_image_name =  time().'.'.$file->getClientOriginalExtension();
        $image->save(public_path('storage/'.$thumbnail_image_name));
        $saved_image_uri = $image->dirname.'/'.$image->basename;
        return $saved_image_uri;
    }
    public function fileUpload(Request $request)

    {

        $this->validate($request, [

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $image = $request->file('image');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/images');

        $image->move($destinationPath, $input['imagename']);


        $this->postImage->add($input);


        return back()->with('success','Image Upload successful');

    }

}
