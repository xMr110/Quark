<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Industry;
use App\Models\Literature;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Product;
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
    public function industries()
    {
        $industries = Industry::all();
        return view('Industries',compact('industries'));
    }
    public function SingleIndustry($id)
    {
        $literatures = Literature::latest()->take(3)->get();
        $industry = Industry::findOrFail($id);
        $categories = Category::all()->where('industry_id',$id);

//        //TODO
        $industries =Industry::all();
        return view('SingleIndustry',compact('industries','industry','categories','literatures'));
    }
    public function SingleCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('SingleCategory',compact('category'));
    }
    public function Products()
    {
        $products = Product::all();

        return view('products',compact('products'));
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
