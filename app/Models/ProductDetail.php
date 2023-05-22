<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    public $timestamps=false;

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}
