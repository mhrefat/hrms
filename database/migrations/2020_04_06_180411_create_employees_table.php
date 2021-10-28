<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->integer('emp_id')->unique();
            $table->foreignId('user_id')->nullable();
            $table->string('name');
            $table->string('depart');
            $table->string('desig');
            $table->integer('mobile')->unique();
            $table->string('email',100)->unique();
            $table->string('join');
             $table->string('address');
             $table->string('gender');
             $table->string('salary');
             $table->string('birth');
             $table->string('status');
             $table->string('image');
            $table->timestamps();
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
