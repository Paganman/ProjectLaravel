<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('officeCode', 10)->unique();
            $table->string('city', 10);
            $table->string('phone', 20);
            $table->string('addressLine1', 50);
            $table->string('addressLine2', 50);
            $table->string('state', 10);
            $table->string('country', 10);
            $table->string('postalCode', 10);
            $table->string('territory', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
