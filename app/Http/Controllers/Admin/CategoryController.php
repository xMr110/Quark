<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.categories.create-edit');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.create-edit',compact('category'));
    }
    public function store(CategoryRequest $request)
    {
        $this->validate($request,['image_path'=>'image|required']);
        $category = new Category();
        if ($request->hasFile('image_path'))
        {
            $category->image_path = $request->file('image_path')->store('categories','public');
        }
        $category->title = $request->get('title');
        $category->description = $request->get('description');
        $category->save();

        return redirect(action('Admin\CategoryController@index'))->with('success','Category Added');

    }
    public function update(CategoryRequest $request,$id)
    {
        $category = Category::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$category->image_path)))
            {
                unlink(storage_path('/storage/'.$category->image_path));
            }
            else{
                $category->image_path = $request->file('image_path')->store('categories','public');
            }
        }
        $category->title = $request->get('title');
        $category->description = $request->get('description');
        $category->save();

        return redirect(action('Admin\CategoryController@index'))->with('success','Category Updated');

    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if (count($category->products)) {
            return back()->with('error', 'Category Connected To Products You Can,t delete it fix that first');
        }
        if (file_exists(storage_path('/storage/'.$category->image_path)))
        {
            unlink(storage_path('/storage/'.$category->image_path));
        }
        $category->delete();
        return redirect(action('Admin\CategoryController@index'))->with('success','Category Deleted..');
    }
}
