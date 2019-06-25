<?php

use Illuminate\Database\Seeder;


use App\Models\ProductLineTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(UsersTableSeeder::class);
        $this->call(ProductLineTaleSeeder::class);
    }
}
