<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug_productname){

        $product=Product::whereSlug($slug_productname)->firstOrFail();

        return view('product',compact('product'));
    }

    public function search(Request $request){

        $wanted=request()->input('wanted');
        $products=Product::where('productName','like',"%$wanted%")
            ->orWhere('explanation','like',"%$wanted%")
            ->paginate(8);

        request()->flash();

        return view('search',compact('products'));

    }
}
