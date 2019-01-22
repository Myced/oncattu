<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchedTutorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watched_tutorials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('tutorial_id');
            $table->string('content_id');
            $table->integer('no_times')->default(1); //no of times this user has watched this content
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
        Schema::dropIfExists('watched_tutorials');
    }
}
