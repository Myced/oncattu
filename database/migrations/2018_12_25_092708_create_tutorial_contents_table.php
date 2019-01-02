<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorialContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorial_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tutorial_id');
            $table->string('name');
            $table->string('title');
            $table->string('pdf')->nullable();
            $table->string('ppt')->nullable();
            $table->string('video')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('tutorial_contents');
    }
}
