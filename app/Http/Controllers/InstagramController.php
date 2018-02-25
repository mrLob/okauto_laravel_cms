<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Instagram\Instagram;

class InstagramController extends Controller
{
    public function instagramFeed()
    {
        $instagram  = new Instagram();
        $instagrams = $instagram->get('ok__auto');

        return view('landing', compact('instagrams'));
    }
}
