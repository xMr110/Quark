<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Cache;
use Illuminate\Support\Facades\File;
use Session;

class BackgroundController extends Controller
{
    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }
    public function index()
    {
        return view('admin.background.index');
    }


    public function store(Request $request){

        $settings = $this->model->rows();

        $input = $request->except(['_token', '_method']);


        if ($request->hasFile('About_Background')) {
            $input['About_Background'] = $request->file('About_Background')->store('Backgrounds', 'public');

            @unlink(public_path('app/public/'. $settings->About_Background));
        }

        if ($request->hasFile('Industry_Background')) {
            $input['Industry_Background'] = $request->file('Industry_Background')->store('Backgrounds', 'public');

            @unlink(public_path('app/public/'. $settings->Industry_Background));
        }

        if ($request->hasFile('Products_Background')) {
            $input['Products_Background'] = $request->file('Products_Background')->store('Backgrounds', 'public');

            @unlink(public_path('app/public/'. $settings->Products_Background));
        }

        if ($request->hasFile('Partners_Background')) {
            $input['Partners_Background'] = $request->file('Partners_Background')->store('Backgrounds', 'public');

            @unlink(storage_path('app/public/'. $settings->Partners_Background));
        }
        if ($request->hasFile('Literature_Background')) {
            $input['Literature_Background'] = $request->file('Literature_Background')->store('Backgrounds', 'public');

            @unlink(storage_path('app/public/'. $settings->Literature_Background));
        }
        if ($request->hasFile('Contact_Background')) {
            $input['Contact_Background'] = $request->file('Contact_Background')->store('Backgrounds', 'public');

            @unlink(storage_path('app/public/'. $settings->Contact_Background));
        }

        foreach ($input as $key => $value) {
            if(!is_null($value))
                $this->model->set($key, $value);
        }

        Cache::forget('site_settings');
        $settings = Cache::rememberForever('site_settings', function () {
            $settings = $this->model->rows();
            return $settings;
        });

        return back()->with('success', 'Saved!');
    }


}
