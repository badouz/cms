<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
class WebsiteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $setting = Setting::first();

        return view("welcome",compact('setting'));

    }
}
