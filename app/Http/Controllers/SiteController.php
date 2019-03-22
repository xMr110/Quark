<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Literature;
use App\Models\Slider;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {

        $industries = Industry::all();
        $slides = Slider::all();
        $literatures = Literature::all();
        return view('index',compact('slides','industries','literatures'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contactus');
    }
}
