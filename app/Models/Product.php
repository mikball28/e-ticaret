<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'productName',
        'slug',
        'explanation',
        'price'
    ];

    public function categories(){

        return $this->belongsToMany('App\Models\Products','category_products');
    }

    public function detail(){

        return $this->hasOne('App\Models\ProductDetail');
    }
}
