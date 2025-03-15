<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Menu;
class WebsiteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $setting = Setting::first();
        $allMenus = Menu::orderBy('order')->get();
        return view("welcome",compact('setting','allMenus'));

    }
}
