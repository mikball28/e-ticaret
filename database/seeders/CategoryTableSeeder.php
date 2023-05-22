<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('categories')->truncate();
        $id=DB::table('categories')->insertGetId(['categoryName'=>'Elektronik','slug'=>'elektronik']);
        DB::table('categories')->insert(['categoryName' => 'Bilgisayar/Tablet', 'slug' => 'bilgisayar-tablet','topId'=>$id]);
        DB::table('categories')->insert(['categoryName'=>'Telefon','slug'=>'telefon','topId'=>$id]);
        DB::table('categories')->insert(['categoryName'=>'Tv ve Ses Sistemleri','slug'=>'tv-ses-sistemleri','topId'=>$id]);
        DB::table('categories')->insert(['categoryName'=>'Kamera','slug'=>'kamera','topId'=>$id]);
       
        $id=DB::table('categories')->insertGetId(['categoryName'=>'Kitap','slug'=>'kitap']);
        DB::table('categories')->insert(['categoryName' => 'Edebiyat', 'slug' => 'edebiyat', 'topId' => $id]);
        DB::table('categories')->insert(['categoryName' => 'Çocuk', 'slug' => 'cocuk', 'topId' => $id]);
        DB::table('categories')->insert(['categoryName' => 'Bilgisayar', 'slug' => 'bilgisayar', 'topId' => $id]);
        DB::table('categories')->insert(['categoryName' => 'Sınavlara Hazırlık', 'slug' => 'sinavlara-hazirlik', 'topId' => $id]);

        DB::table('categories')->insert(['categoryName'=>'Dergi','slug'=>'dergi']);
        DB::table('categories')->insert(['categoryName'=>'Mobilya','slug'=>'mobilya']);
        DB::table('categories')->insert(['categoryName'=>'Dekerasyon','slug'=>'dekerasyon']);
        DB::table('categories')->insert(['categoryName'=>'Oyuncak','slug'=>'oyuncak']);
        DB::table('categories')->insert(['categoryName'=>'Kozmetik','slug'=>'kozmetik']);
        DB::table('categories')->insert(['categoryName'=>'Kişisel Bakım','slug'=>'kisisel-bakim']);
        DB::table('categories')->insert(['categoryName'=>'Giyim ve Moda','slug'=>'giyim-moda']);
        DB::table('categories')->insert(['categoryName'=>'Anne ve Cocuk','slug'=>'anne-cocuk']);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
