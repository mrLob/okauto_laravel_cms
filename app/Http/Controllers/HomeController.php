<?php

namespace App\Http\Controllers;

use App\EMessage;
use App\MicroPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mposts = MicroPost::all()->sortByDesc('id')->take(3);
        $msg = EMessage::all()->sortByDesc('id')->take(3);
        return view('home',compact('mposts','msg'));
    }
}
