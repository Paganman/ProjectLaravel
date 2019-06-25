<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\ProductLine;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// $factory->define(App\User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//         'remember_token' => str_random(10),
//     ];
// });

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'productLine' => $faker->ean8(),
        'textDescription' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'htmlDescription' => $faker->randomHtml(2,3),
        'image' => $faker->imageUrl($width = 640, $height = 480),
    ];
});

$factory->define(Product::class, function (Faker $faker){
	$productLine = DB::table('productlines')->pluck('productLine');

	return [
		'productCode' => $faker->ean8(), 
		'productName' => $faker->name(),
		'productLine' => $faker->randomElement($productLine),
		'productScale' => $faker->text($maxNbChars = 100),
		'productVendor' => $faker->catchPhrase(),
		'productDescription' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'quantityInStock' => $faker->numberBetween($min = 1000, $max = 9000),
		'buyPrice' => $faker->numberBetween($min = 10, $max = 200),
		'MSRP' => $faker->numberBetween($min = 4000, $max = 5000)

	];
});

// $factory->define(OrderDetail::class, function (Faker $faker) {
// 	$productCode = DB::table('products')->pluck('productCode');

//     return [
//         'orderNumber' => $faker->,
// 		'productCode',
// 		'quantityOrdered',
// 		'priceEach',
// 		'orderLineNumber',
//     ];
// });