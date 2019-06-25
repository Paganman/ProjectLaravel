<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customerNumber')->unique();
            $table->string('customerName', 100);
            $table->string('contactLastName', 20);
            $table->string('contactFirstName', 20);
            $table->string('phone', 20);
            $table->string('addressLine1', 50);
            $table->string('addressLine2', 50);
            $table->string('city', 10);
            $table->string('state', 20);
            $table->string('postalCode', 10);
            $table->string('country', 10);
            $table->string('salesRepEmployeeNumber');
            $table->integer('creditLimit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
