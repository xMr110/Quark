<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
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
        return view('admin.products.create-edit');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.create-edit',compact('product'));
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
        $product->category_id = $request->get('category_id');

        $product->save();

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
        $product->category_id = $request->get('category_id');

        $product->save();

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

        $product->delete();

        return redirect(action('Admin\ProductController@index'))->with('success','Product Removed');


    }
}
