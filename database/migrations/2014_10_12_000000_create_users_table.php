<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('emp_id')->nullable();
            $table->string('role')->default('employee');
            $table->string('email')->unique();
             $table->string('depart')->nullable();
             $table->string('desig')->nullable();
             $table->integer('mobile')->nullable();
             $table->string('join')->nullable();
             $table->string('address')->nullable();
             $table->string('gender')->nullable();
             $table->string('salary')->nullable();
             $table->string('birth')->nullable();
             $table->string('image')->nullable();
            $table->string('usertype')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
}
