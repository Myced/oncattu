<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('thumbnail');
            $table->string('type'); //university or college
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('edition');
            $table->string('author');
            $table->string('price');
            $table->string('pdf_path');
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
        Schema::dropIfExists('books');
    }
}
