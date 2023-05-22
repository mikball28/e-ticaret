<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_categoryname){
        $categories = Category::where('slug', $slug_categoryname)->firstorFail();
        $bottom_categories = Category::where('topId', $categories->id)->get();

        $order=request('order');
        if($order=='bestseller'){
            $products=$categories->products()
                ->join('product_details','product_details.product_id','products.id')
                ->orderByDesc('product_details.show_bestseller')
                ->paginate(8);
        }
        else if($order='new'){
            $products=$categories->products()->orderByDesc('updated_at')->paginate(8);

        }
        else{
            $products=$categories->products()->paginate(8) ;
        }

        
        
        return view('category',compact('categories','bottom_categories','products'));
    }
}
