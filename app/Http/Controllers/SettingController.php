<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allSettings = Setting::get();
  
        return view("settings.index",compact('allSettings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("settings.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validation=$request->validate([
            'logo'=>"required|file",
            'title'=>"required|string|min:3",
            'footer'=>"required|string|min:10"
        ]);

   $path = $request->file('logo')->store('logo', 'public');

        $setting = Setting::create([
            'logo'=>   $path,
            'title'=>$request->input('title'),
            'footer'=>$request->input('footer')
        ]);

        return redirect()->route("settings.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //

        return view("settings.edit",compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
            //
            $validation=$request->validate([
                'logo'=>"required|file",
                'title'=>"required|string|min:3",
                'footer'=>"required|string|min:10"
            ]);
    
       $path = $request->file('logo')->store('logo', 'public');
    
            $setting->update([
                'logo'=>   $path,
                'title'=>$request->input('title'),
                'footer'=>$request->input('footer')
            ]);
    
            return redirect()->route("settings.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
