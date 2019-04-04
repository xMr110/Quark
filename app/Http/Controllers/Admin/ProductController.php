<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        $partners =Partner::all();
        $categories =Category::all();
        return view('admin.products.create-edit',compact('partners','categories'));
    }
    public function edit($id)
    {
        $partners =Partner::all();
        $categories =Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.create-edit',compact('product','partners','categories'));
    }
    public function store(ProductRequest $request)
    {
        $this->validate($request,['image_path'=>'image|required']);
        $this->validate($request,['pdf_path'=>'pdf']);
        $product = new Product();
        if($request->hasFile('image_path'))
        {
            $product->image_path=$request->file('image_path')->store('Products','public');
        }
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->techInfo = $request->get('techInfo');
        if ($request->has('company'))
        $product->company = $request->get('company');
        if ($request->has('partner_id'))
        $product->partner_id = $request->get('partner_id');

        if ($request->hasFile('pdf_path'))
        {
            $product->pdf_path=$request->file('pdf_path')->store('Products','public');
        }
        if ($request->has('video_path'))
        {
            $product->video_path=$request->get('video_path');
        }
        $product->save();
        $categories = explode(',',$request->category_id);
        $attached = array();
        foreach ($categories as $category)
        {
            if ($selectedCategory = Category::find($category))
            {
                array_push($attached,$selectedCategory->id);
            }
        }
        $product->categories()->sync($attached);


        return redirect(action('Admin\ProductController@index'))->with('success','Product Added');


    }

    public function update(ProductRequest $request,$id)
    {
        $product = Product::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$product->image_path)))
            {
                unlink(storage_path('/storage/'.$product->image_path));
            }
            else{
                $product->image_path = $request->file('image_path')->store('Products','public');
            }
        }
        if ($request->hasFile('pdf_path'))
        {
            if (file_exists(storage_path('/storage/'.$product->pdf_path)))
            {
                unlink(storage_path('/storage/'.$product->pdf_path));
            }
            else{
                $product->pdf_path = $request->file('pdf_path')->store('Products','public');
            }
        }
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->techInfo = $request->get('techInfo');
        if ($request->has('company'))
            $product->company = $request->get('company');
        if ($request->has('partner_id'))
            $product->partner_id = $request->get('partner_id');

        if ($request->hasFile('pdf_path'))
        {
            $product->pdf_path=$request->file('pdf_path')->store('Products','public');
        }
        if ($request->has('video_path'))
        {
            $product->video_path=$request->get('video_path');
        }


        $product->save();

        if ($request->get('categories')) {
            $categories = explode(',',$request->category_id);
            $attached = array();
            foreach ($categories as $category)
            {
                if ($selectedCategory = Category::find($category))
                {
                    array_push($attached,$selectedCategory->id);
                }
            }
            $product->categories()->sync($attached);

        }


        return redirect(action('Admin\ProductController@index'))->with('success','Product Updated');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if (file_exists(storage_path('/storage/'.$product->image_path)))
        {
            unlink(storage_path('/storage/'.$product->image_path));
        }
        if (file_exists(storage_path('/storage/'.$product->pdf_path)))
        {
            unlink(storage_path('/storage/'.$product->pdf_path));
        }
        $product->categories()->delete();

        $product->delete();

        return redirect(action('Admin\ProductController@index'))->with('success','Product Removed');


    }
}
