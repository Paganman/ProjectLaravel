<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeeNumber')->unique();
            $table->string('lastName', 10);
            $table->string('firstName', 10);
            $table->string('extension', 10);
            $table->string('email', 10);
            $table->string('officeCode', 10);
            $table->string('reportsTo', 10);
            $table->string('jobTitle', 20);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
