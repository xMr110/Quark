<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Cache;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    public function index()
    {

        return view('admin.settings.edit');
    }
    public function store(Request $request){

        $settings = $this->model->rows();

        $input = $request->except(['_token', '_method']);

        if ($request->hasFile('logo')) {
            $input['logo'] = $request->file('logo')->store('basics','public');

//            @unlink(public_path('app/public/'. $settings->logo));
        }
        if ($request->hasFile('favicon')) {
            $input['favicon'] = $request->file('favicon')->store('basics', 'public');

//            @unlink(public_path('app/public/'. $settings->logo));
        }
        if ($request->hasFile('aboutImage')) {
            $input['aboutImage'] = $request->file('aboutImage')->store('about', 'public');

//            @unlink(public_path('app/public/'. $settings->logo));
        }
        if ($request->hasFile('aboutImage2')) {
            $input['aboutImage2'] = $request->file('aboutImage2')->store('about', 'public');

//            @unlink(public_path('app/public/'. $settings->logo));
        }
        foreach ($input as $key => $value) {
            if(!is_null($value))
                $this->model->set($key, $value);
            elseif(is_null($value))
                $this->model->set($key, '');
        }

        Cache::forget('site_settings');
        $settings = Cache::rememberForever('site_settings', function () {
            $settings = $this->model->rows();
            return $settings;
        });

        return back()->with('success', 'Settings Saved Successfully..');
    }

    public function about()
    {

        return view('admin.about.edit');
    }
}
