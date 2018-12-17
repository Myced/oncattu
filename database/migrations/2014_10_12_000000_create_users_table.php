<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_id')->nullable();
<<<<<<< HEAD
            $table->string('type')->default('student');
=======
>>>>>>> dee027b4a572d9e315e44e7a9d348b572324db49
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('sex');
            $table->string('location')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('avatar')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('prep_head')->nullable();
            $table->string('prep_name')->nullable();
            $table->string('tutor_type')->nullable();
            $table->rememberToken();
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
