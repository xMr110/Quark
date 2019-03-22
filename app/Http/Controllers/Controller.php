<?php

namespace App\Http\Controllers;

use App\Models\Literature;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use \Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //its just a dummy data object.
        $footerLits = Literature::orderBy('created_at', 'desc')->get()->take(2);

        // Sharing is caring
        View::share('footerLits', $footerLits);
    }

}
