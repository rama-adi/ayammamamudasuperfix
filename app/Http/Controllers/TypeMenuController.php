<?php

namespace App\Http\Controllers;

use App\Models\Type_Menu;
use App\Http\Requests\StoreType_MenuRequest;
use App\Http\Requests\UpdateType_MenuRequest;
use Illuminate\Support\Facades\DB;

class TypeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreType_MenuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($type_Menu)
    {

        // $types = Type_Menu::with("menus")->where("type_id", $type_Menu)->get();
        // $types = DB::table('type__menus')
        // ->join('menus', 'type__menus.menu_id', '=', 'menus.id')
        // ->select('type__menus.*', 'menus.*')
        // ->where('type__menus.type_id', 2);

        $types = DB::table('type__menus')
            ->join('menus', 'type__menus.menu_id', '=', 'menus.id')
            ->select('type__menus.*', 'menus.*')
            ->where('type__menus.type_id', $type_Menu)
            ->get();

        return view("home.layouts.wrapper",['content' => 'home/menu/show'], compact("types"));

        // dd($types);
        // return json_encode($results);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_Menu $type_Menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateType_MenuRequest $request, Type_Menu $type_Menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_Menu $type_Menu)
    {
        //
    }
}
