<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $faker = Faker::create();
        
        Product::truncate();
        ProductDetail::truncate();

        for($i=0;$i<30;$i++){
            $productName = $faker->sentence(2);
            $product=Product::create([
                'productName'=>$productName,
                'slug'=>$productName,
                'explanation'=>$faker->sentence(20),
                'price'=>$faker->randomFloat(3,1,20)

            ]);

            $detail=$product->detail()->create([
                'show_slider'=>rand(0,1),
                'show_day_opportunity'=>rand(0,1),
                'show_featured'=>rand(0,1),
                'show_bestseller'=>rand(0,1),
                'show_discount'=>rand(0,1)

            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
