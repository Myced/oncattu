<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMomoLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('momo_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('tut_code');
            $table->string('amount');
            $table->string('user_number');
            $table->string('receiver_number');
            $table->string('momo_email');
            $table->string('status_code');
            $table->string('transaction_id');
            $table->string('processing_number');
            $table->string('raw_response');
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
        Schema::dropIfExists('momo_logs');
    }
}
