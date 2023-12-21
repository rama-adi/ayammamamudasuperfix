<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu.index');
    }

    public function show(Category $category)
    {
        return view('menu.show')
            ->with('category', $category);
    }

    public function detail(Menu $menu)
    {
        return view('menu.detail')
            ->with('menu', $menu);
    }
}
