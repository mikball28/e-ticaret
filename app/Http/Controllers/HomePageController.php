<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $categories = Category::whereRaw('topId is null')->get();

        $product_slider=ProductDetail::with('product')->where('show_slider',1)->take(6)->get();
        $product_day_opportunity=Product::select('products.*')
                ->join('product_details','product_details.product_id','products.id')
                ->where('product_details.show_day_opportunity',1)
                ->orderBy('updated_at','desc')
                ->first();
        $product_featured=Product::join('product_details','product_details.product_id','products.id')
                ->where('product_details.show_featured',1)
                ->take(3)
                ->get();  
        $product_bestseller=ProductDetail::with('product')->where('show_bestseller',1)->take(4)->get();
        $product_discount=ProductDetail::with('product')->where('show_discount',1)->take(4)->get();

      


        return view('index',compact('categories','product_slider','product_featured','product_day_opportunity','product_featured',
                    'product_bestseller','product_discount' ));
    }
}
