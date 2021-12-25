<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Post;

class AboutController extends Controller
{
    public function index()
    {
        $ListSlider = Slider::paginate(10);
        $post = Post::orderBy('id', 'desc')->paginate(3);
        return view('frontend.layouts.about', [
            'data' => $ListSlider,
            'post' => $post
        ]);
    }
}
