<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index',compact('partners'));
    }
    public function create()
    {
        return view('admin.partners.create-edit');
    }
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.create-edit',compact('partner'));
    }
    public function store(PartnerRequest $request)
    {
        $this->validate($request,['image_path' => ' image|required']);
        $partner = new Partner();
        if($request->hasFile('image_path'))
        {
            $partner->image_path=$request->file('image_path')->store('Partners','public');
        }
        $partner->title = $request->name;
        $partner->description = $request->description;
        $partner->link = $request->link;
        $partner->save();
        return redirect(action('Admin\PartnersController@index'))->with('success','Partner Added');
    }
    public function update(PartnerRequest $request,$id)
    {
        $updatePartner = Partner::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('app/public/' . $updatePartner->image_path)))
            {
                unlink(storage_path('app/public/' . $updatePartner->image_path));
            }
            $updatePartner->image_path = $request->file('image_path')->store('Partners','public');
        }
        if ($request->get('title'))
            $updatePartner->title = $request->get('title');
        if ($request->get('description'))
            $updatePartner->description = $request->get('description');
        if ($request->get('link'))
            $updatePartner->link = $request->get('link');
        $updatePartner->save();
        return redirect(action('Admin\PartnersController@index'))->with('success','Partner Updated');


    }
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        if ($partner->products->count() > 0) {
            return back()->with('Danger', 'Partner Connected To Products You Can,t delete it fix that first');
        } else if ($partner->products->count() == 0) {
            if (file_exists(storage_path('app/public' . $partner->image_path))) {
                unlink(storage_path('app/public/' . $partner->image_path));
            }
            $partner->delete();
            return redirect(action('Admin\PartnersController@index'))->with('success', 'تم الحذف  بنجاح!');
        }
    }
}
