<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Course;
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


        $partners = Partner::all();
        $industries = Industry::all();
        $slides = Slider::all();
        $literatures = Literature::all();
        return view('index', compact('slides', 'industries', 'literatures','partners'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        $contacts = Contact::all();
        return view('contactus',compact('contacts'));
    }

    public function industries()
    {
        $industries = Industry::all();
        return view('Industries', compact('industries'));
    }

    public function SingleIndustry($id)
    {
        $industry = Industry::findOrFail($id);
        $categories = Category::all()->where('industry_id', $id);
        $partners = array();
        $products = array();
        foreach ($categories as $category)
        {
            foreach ($category->products as $product)
            {
                array_push($products,$product);
            }
        }
        $products=collect($products);
            $products = $products->unique('id');
        foreach ($products as $product)
        {
            array_push($partners,$product->partner);
        }
        $partners=collect($partners);
           $partners = $partners->unique('id');

//        //TODO
        $industries = Industry::all();
        return view('SingleIndustry', compact('industries', 'industry', 'categories', 'partners'));
    }

    public function SingleCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('SingleCategory', compact('category'));
    }

    public function Products()
    {
        $partners = Partner::all();
        $categories = Category::all();
        $products = Product::all();
        return view('products', compact('products','categories','partners'));
    }
    public function getCategories(Request $request)
    {
        $partner_id = $request->get('partner_id');
        $categories = Category::all();
        $categoriesB = array();
        foreach ($categories as $category)
        {
            foreach ($category->products as $product)
            {
                if ($product->partner_id == $partner_id)
                {
                    array_push($categoriesB,$category);
                }
            }

        }
        $categoriesB=collect($categoriesB);

        $categoriesB = $categoriesB->unique('id');

        $categoreis = $categoriesB->pluck('title','id');


        return response()->json($categoreis);
    }
    public function getProducts(Request $request)
    {

        switch ($request)
        {
            case $request->category_id == 'B1' && $request->partner_id =='A1':
                $html = '';
                $products = Product::all();
                foreach ($products as $product) {
                    $html = $html.'<div class="p-0  col-md-4 col-xs-12 col-sm-12 service-block-2 mr-2 ml-2">
                        <img  src="'.url('/storage/'.$product->image_path).'" alt="img">
                        <div class="service-block-2-content">
                            <h4><a href="'.action('SiteController@Product',$product).'">'.$product->title.'</a></h4>
                            <a href="'.action('SiteController@Product',$product).'" class="service-block-2-btn">Read more <i class="fa fa-arrow-right primary-color"></i></a>
                        </div>
                    </div>';
                }
                return $html;
                break;
            case $request->category_id == 'B1':
                $html = '';

//                $categories = Category::all()->where('industry_id', $request->industry_id);
//                $products = array();
//                foreach ($categories as $category)
//                {
//                   foreach ($category->products as $product)
//                   {
//                      array_push($products,$product);
//                   }
//                }
//                $products=collect($products);
//                $products = $products->unique('id');
//            $productsB= array();
            $products = Product::all()->where('partner_id',$request->partner_id);
//            foreach ($products as $product)
//            {
//                if ($product->category_id == $request->category_id)
//                {
//                    array_push($productsB,$product);
//                }
//            }
//            $productsB = collect($productsB);
//            $productsB = $productsB->unique('id');
                foreach ($products as $product) {
                    $html = $html.'<div class="p-0  col-md-4 col-xs-12 col-sm-12 service-block-2 mr-2 ml-2">
                        <img  src="'.url('/storage/'.$product->image_path).'" alt="img">
                        <div class="service-block-2-content">
                            <h4><a href="'.action('SiteController@Product',$product).'">'.$product->title.'</a></h4>
                            <a href="'.action('SiteController@Product',$product).'" class="service-block-2-btn">Read more <i class="fa fa-arrow-right primary-color"></i></a>
                        </div>
                    </div>';
                }
                return $html;
                break;
            default:
                $html = '';
                $category = Category::findOrFail($request->category_id);

                foreach ($category->products as $product) {
                    if ($product->partner_id == $request->partner_id) {
                        $html = $html . '<div class="p-0  col-md-4 col-xs-12 col-sm-12 service-block-2 mr-2 ml-2">
                        <img  src="' . url('/storage/' . $product->image_path) . '" alt="img">
                        <div class="service-block-2-content">
                            <h4><a href="' . action('SiteController@Product', $product) . '">' . $product->title . '</a></h4>
                            <a href="' . action('SiteController@Product', $product) . '" class="service-block-2-btn">Read more <i class="fa fa-arrow-right primary-color"></i></a>
                        </div>
                    </div>';
                    }
                }
                return $html;
                break;
        }
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
    public function courses()
    {
        $courses = Course::all();

        return view('courses',compact('courses'));
    }
    public function course($id)
    {
        $course = Course::findOrFail($id);
        return view('SingleCourse',compact('course'));
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
