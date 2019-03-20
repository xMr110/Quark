<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{

    public function index()
    {
        $slides=Slider::all();
        return view('admin.sliders.index',compact('slides'));
    }
    public function create()
    {
        return view('admin.sliders.create-edit');
    }
    public function edit($id)
    {
        $slide = Slider::findOrFail($id);
        return view('admin.sliders.create-edit',compact('slide'));
    }
    public function store(SliderRequest $request)
    {
        $this->validate($request, ['image_path' => 'required|image']);
        $this->validate($request, ['mobile_image_path' => 'required|image']);
        $slide = new Slider();
        if ($request->hasFile('image_path')) {
            $slide->image_path = $request->file('image_path')->store('slider', 'public');
        }
        if ($request->hasFile('mobile_image_path')) {
            $slide->mobile_image_path = $request->file('mobile_image_path')->store('slider', 'public');
        }

        $slide->title = $request->get('title');
        $slide->description = $request->get('description');

        $slide->save();
        return redirect(action('Admin\SliderController@index'))->with('success', 'Slide Added Successfully..');
    }
    public function update(SliderRequest $request,$id)
    {
        $slide = Slider::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if(file_exists(storage_path('/storage/'.$slide->image_path)))
            {
                unlink(storage_path('/storage/'.$slide->image_path));
            }
            $slide->image_path=$request->file('image_path')->store('slider','public');
        }
        if ($request->hasFile('mobile_image_path'))
        {
            if(file_exists(storage_path('/storage/'.$slide->mobile_image_path)))
            {
                unlink(storage_path('/storage/'.$slide->mobile_image_path));
            }
            $slide->mobile_image_path=$request->file('mobile_image_path')->store('slider','public');
        }

        $slide->title = $request->get('title');
        $slide->description = $request->get('description');


        $slide->save();
        return redirect(action('Admin\SliderController@index'))->with('Success','Slide Updated Successfully');

    }

    public function destroy($id)
    {
        $slide=Slider::findOrFail($id);
        if(file_exists('/storage/'.$slide->image_path))
        {
            unlink(storage_path('/storage/'.$slide->image_path));

        }
        if(file_exists('/storage/'.$slide->mobile_image_path))
        {
            unlink(storage_path('/storage/'.$slide->mobile_image_path));

        }
        $slide->delete();
        return redirect(action('Admin\SliderController@index'))->with('Success','Slide Removed Successfully');

    }
}
