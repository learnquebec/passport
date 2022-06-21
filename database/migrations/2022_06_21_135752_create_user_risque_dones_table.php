<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_risque_dones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_risque_id')->index()->default(0);
            $table->foreign('user_risque_id')->references('id')->on('user_risques');

            $table->string('comment');
            $table->unsignedSmallInteger('difficulty_id');

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
        Schema::dropIfExists('user_risque_dones');
    }
};
