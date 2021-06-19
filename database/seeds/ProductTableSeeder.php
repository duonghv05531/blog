<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $article = new Product();
            $article->cate_id =  1;
            $article->name = 'San pham' . $i;
            $article->price = 100000;
            $article->description = 'Mieu ta san pham so ' . $i;
            $article->star = 100;
            $article->save();
        }
    }
}
