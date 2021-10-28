<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('emp_id')->nullable();
            $table->string('name')->nullable();
            $table->string('depart')->nullable();
            $table->string('desig')->nullable();
            $table->integer('salary')->nullable();
            $table->integer('allowance')->nullable();
            $table->integer('fund')->nullable();
            $table->integer('bonus')->nullable();
            $table->integer('reduction')->nullable();
            $table->integer('gross')->nullable();
            $table->string('month')->nullable();
            $table->unique(['month','emp_id']);
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
        Schema::dropIfExists('salaries');
    }
}
