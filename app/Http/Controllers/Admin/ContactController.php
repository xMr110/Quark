<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('admin.contacts.index',compact('contacts'));
    }
    public function create()
    {
        return view('admin.contacts.create-edit');
    }
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.create-edit',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $this->validate($request,['image_path'=>'image|required']);
        $contact = new Contact();

        if ($request->hasFile('image_path'))
        {
            $contact->image_path = $request->file('image_path')->store('contacts','public');
        }
        $contact->address = $request->get('address');
        $contact->phone = $request->get('phone');
        $contact->mobile = $request->get('mobile');
        $contact->email = $request->get('email');
        if ($request->has('fax'))
        $contact->fax = $request->get('fax');
        if ($request->has('whatsapp'))
            $contact->whatsapp = $request->get('whatsapp');

        $contact->save();
        return redirect(action('Admin\ContactController@index'))->with('success','Contact Added');

    }
    public function update(ContactRequest $request,$id)
    {

        $contact =Contact::findOrFail($id);
        if ($request->hasFile('image_path'))
        {
            if (file_exists(storage_path('/storage/'.$contact->image_path)))
            {
                unlink(storage_path('/storage/'.$contact->image_path));
            }
            else{
                $contact->image_path = $request->file('image_path')->store('contacts','public');
            }
        }
        $contact->address = $request->get('address');
        $contact->phone = $request->get('phone');
        $contact->mobile = $request->get('mobile');
        $contact->email = $request->get('email');
        if ($request->has('fax'))
            $contact->fax = $request->get('fax');
        if ($request->has('whatsapp'))
            $contact->whatsapp = $request->get('whatsapp');

        $contact->save();
        return redirect(action('Admin\ContactController@index'))->with('success','Contact updated');

    }
    public function destroy($id)
    {
        $contact =Contact::findOrFail($id);
        if (file_exists(storage_path('/storage/'.$contact->image_path)))
        {
            unlink(storage_path('/storage/'.$contact->image_path));
        }
        $contact->delete();
        return redirect(action('Admin\ContactController@index'))->with('success','Contact Deleted');

    }
}
