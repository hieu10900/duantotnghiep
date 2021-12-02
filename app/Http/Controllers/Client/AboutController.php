<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class AboutController extends Controller
{
    public function index()
    {
        $ListSlider = Slider::paginate(10);
        return view('frontend.layouts.about', [
            'data' => $ListSlider,
        ]);
    }
}
