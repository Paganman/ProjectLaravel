<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use App\Models\ProductLine;
use App\Models\Product;

class ProductLineTaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   //      DB::table('productlines')->insert([
   //      	'productLine' => rand(10,100),
			// 'textDescription' => Str::random(20),
			// 'htmlDescription' => Str::random(10),
			// 'image' => str::random(10),
   //      ]);
        	
        factory(ProductLine::class, 10)->create();
        factory(Product::class, 10)->create();
        
    }
}
