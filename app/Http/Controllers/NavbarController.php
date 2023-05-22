<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class NavbarController extends Controller
{
    public function categories(){
        $categories = Category::whereRaw('topId is null')->get();
        return view('layout.navbar',compact('categories'));
    }
}
