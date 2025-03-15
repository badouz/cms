<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $allMenus = Menu::get();
  
        return view("menus.index",compact('allMenus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("menus.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
          //
          $validation=$request->validate([
            'title'=>"required|string",
            'order'=>"required",
            'link'=>"required|string"
        ]);

        $menu = Menu::create([
            'title'=>   $request->input('title'),
            'order'=>(int)$request->input('order'),
            'link'=> $request->input('link'),
        ]);

        return redirect()->route("menus.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
        return view("menus.edit",compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
        return view("menus.edit",compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
     //
     $validation=$request->validate([
        'title'=>"required|string",
        'order'=>"required",
        'link'=>"required|string"
    ]);

    $menu->update([
        'title'=>   $request->input('title'),
        'order'=>(int)$request->input('order'),
        'link'=> $request->input('link'),
    ]);

    return redirect()->route("menus.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
