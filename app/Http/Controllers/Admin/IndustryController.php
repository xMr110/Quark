<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IndustryRequest;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
    public function index()
    {
        $industries = Industry::all();

        return view('admin.industries.index',compact('industries'));
    }
    public function create()
    {
        return view('admin.industries.create-edit');
    }
    public function edit($id)
    {
        $industry = Industry::findOrFail($id);
        return view('admin.industries.create-edit',compact('industry'));
    }
    public function store(IndustryRequest $request)
    {
        $this->validate($request,['image_path'=>'image|required']);
        $industry = new Industry();
        if ($request->hasFile('image_path'))
        {
            $industry->image_path = $request->file('image_path')->store('industries','public');
        }
        $industry->title = $request->get('title');
        $industry->description = $request->get('description');
        $industry->effectArea = $request->get('effectArea');
        $industry->save();

        return redirect(action('Admin\IndustryController@index'))->with('success','Industry Added');
    }
    public function update(IndustryRequest $request,$id)
    {
        $industry = Industry::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$industry->image_path)))
            {
                unlink(storage_path('/storage/'.$industry->image_path));
            }
            else{
                $industry->image_path = $request->file('image_path')->store('packages','public');
            }
        }
        $industry->title = $request->get('title');
        $industry->description = $request->get('description');
        $industry->effectArea = $request->get('effectArea');

        $industry->save();

        return redirect(action('Admin\IndustryController@index'))->with('success','Industry Updated');
    }

    public function destroy($id)
    {
        $industry = Industry::findOrFail($id);
        if (file_exists(storage_path('/storage/'.$industry->image_path)))
        {
            unlink(storage_path('/storage/'.$industry->image_path));
        }

        $industry->delete();
        return redirect(action('Admin\IndustryController@index'))->with('success','Industry Deleted..');
    }
}
