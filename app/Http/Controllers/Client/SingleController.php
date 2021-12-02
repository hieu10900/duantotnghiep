<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function index()
    {
        $list_post = Post::paginate(5);
        $new_post = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('frontend.layouts.single',compact('list_post','new_post'));
    }
    public function show($id){
        $show_post = Post::find($id);
        $show_post->incrementReadCount();
        $new_post = Post::orderBy('created_at', 'desc')->limit(5)->get();
        return view('frontend.layouts.single',compact('show_post','new_post'));
    }
}
