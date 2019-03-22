<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LiteratureRequest;
use App\Models\Industry;
use App\Models\Literature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiteratureController extends Controller
{
    public function index()
    {
        $literatures = Literature::all();
        return view('admin.literatures.index',compact('literatures'));
    }
    public function create()
    {
        $industries = Industry::all();
        return view('admin.literatures.create-edit',compact('industries'));
    }
    public function edit($id)
    {
        $literature = Literature::findOrFail($id);
        $industries = Industry::all();
        return view('admin.literatures.create-edit',compact('industries','literature'));
    }
    public function store(LiteratureRequest $request)
    {
        $this->validate($request,['attachment'=>'required']);
        $this->validate($request,['image_path'=>'image|required']);
        $literature = new Literature();
        if ($request->hasFile('attachment'))
        {
            $literature->attachment = $request->file('attachment')->store('literatures','public');
        }
        if ($request->hasFile('image_path'))
        {
            $literature->image_path = $request->file('image_path')->store('literatures','public');
        }
        $literature->title = $request->get('title');
        $literature->description = $request->get('description');
        $literature->industry_id = $request->get('industry_id');
        $literature->save();
        return redirect(action('Admin\LiteratureController@index'))->with('success','Literature Added');

    }
    public function update(LiteratureRequest $request,$id)
    {
        $literature = Literature::findOrFail($id);
        if ($request->hasFile('attachment'))
        {
            if (file_exists(storage_path('/storage/'.$literature->attachment)))
              {
            unlink(storage_path('/storage/'.$literature->attachment));
              }
           else{
                 $literature->attachment = $request->file('attachment')->store('literatures','public');
             }
        }
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$literature->image_path)))
            {
                unlink(storage_path('/storage/'.$literature->image_path));
            }
            else{
                $literature->image_path = $request->file('image_path')->store('literatures','public');
            }
        }
        $literature->title = $request->get('title');
        $literature->description = $request->get('description');
        $literature->industry_id = $request->get('industry_id');
        $literature->save();
        return redirect(action('Admin\LiteratureController@index'))->with('success','Literature Updated');

    }
    public function destroy($id)
    {
        $literature = Literature::findOrFail($id);

        if (file_exists(storage_path('/storage/'.$literature->attachment)))
        {
            unlink(storage_path('/storage/'.$literature->attachment));
        }
        if (file_exists(storage_path('/storage/'.$literature->image_path)))
        {
            unlink(storage_path('/storage/'.$literature->image_path));
        }
        $literature->delete();
        return redirect(action('Admin\LiteratureController@index'))->with('success','Literature Deleted..');
    }
}
