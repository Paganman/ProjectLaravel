<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productCode', 20)->unique();
            $table->string('productName', 20);
            $table->string('productLine', 30);
            $table->text('productScale');
            $table->text('productVendor');
            $table->text('productDescription');
            $table->integer('quantityInStock');
            $table->double('buyPrice');
            $table->string('MSRP', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
