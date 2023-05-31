<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('nonna_margherita_db.products');
        
        foreach ($products as $product) {
            $newproduct = new Product();
            $newproduct->name = $product['name'];
            $newproduct->description = $product['description'];
            $newproduct->price = $product['price'];
            $newproduct->img = $product['image'];
            $newproduct->in_stock = $product['in_stock'];
            $newproduct->weight = $product['weight'];
            $newproduct->product_code = $product['product_code'];
            $newproduct->save();
        }
    }
}