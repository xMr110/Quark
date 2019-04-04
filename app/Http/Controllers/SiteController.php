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
        return view('index', compact('slides', 'industries', 'literatures'));
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
        return view('Industries', compact('industries'));
    }

    public function SingleIndustry($id)
    {
        $literatures = Literature::latest()->take(3)->get();
        $industry = Industry::findOrFail($id);
        $categories = Category::all()->where('industry_id', $id);

//        //TODO
        $industries = Industry::all();
        return view('SingleIndustry', compact('industries', 'industry', 'categories', 'literatures'));
    }

    public function SingleCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('SingleCategory', compact('category'));
    }

    public function Products()
    {
        $industries = Industry::all();
        $categories = Category::all();
        $products = Product::all();
        return view('products', compact('products','categories','industries'));
    }
    public function getCategories(Request $request)
    {
        $categoreis = Category::all()->where('industry_id', $request->industry_id)->pluck('title','id');

        return response()->json($categoreis);
    }
    public function getProducts(Request $request)
    {
        $category = Category::findOrFail($request);
        $html = '';
        $category = $category->first();
        foreach ($category->products as $product) {
            $html = $html.'<div class="p-0  col-md-4 col-xs-12 col-sm-12 service-block-2 mr-2 ml-2">
                        <img  src="'.url('/storage/'.$product->image_path).'" alt="img">
                        <div class="service-block-2-content">
                            <h4><a href="'.action('SiteController@Product',$product).'">'.$product->title.'</a></h4>
                            <a href="'.action('SiteController@Product',$product).'" class="service-block-2-btn">Read more <i class="fa fa-arrow-right primary-color"></i></a>
                        </div>
                    </div>';
        }
        return $html;
    }

    public function product($id)
    {
        $product = Product::findOrFail($id);
        return view('single', compact('product'));
    }

    public function literatures()
    {
        $literatures = Literature::all();
        return view('Literatures', compact('literatures'));
    }

    public function partner($id)
    {
        $partner = Partner::findOrFail($id);
        return view('SinglePartner',compact('partner'));
    }
    public function partners()
    {
        $partners = Partner::all();
        return view('Partners',compact('partners'));
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
