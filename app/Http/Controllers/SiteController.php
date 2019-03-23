<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use App\Models\Literature;
use App\Models\Message;
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
    public function Message(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'phone'=>'required|regex:/^[0-9]+$/',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        $message = new Message();
        $message->name = $request->get('name');
        $message->email = $request->get('email');
        $message->phone = $request->get('phone');
        $message->message = $request->get('message');
        $message->status = 0;
        $message->save();
        return back()->with('success','done');
    }


}
