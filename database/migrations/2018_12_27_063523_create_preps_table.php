<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_id');
            $table->string('code');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('area')->nullable();
            $table->string('price');
            $table->string('thumbnail');
            $table->text('description');
            $table->string('fascilitator')->nullable();
            $table->integer('views')->default(1);
            $table->string('status')->default('PENDING');
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
        Schema::dropIfExists('preps');
    }
}
