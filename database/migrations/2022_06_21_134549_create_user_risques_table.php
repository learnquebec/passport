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
        Schema::create('user_risques', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index()->default(0);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('risque_id')->index()->default(0);
            $table->foreign('risque_id')->references('id')->on('risques');

            /* if associated to defi */
            $table->unsignedBigInteger('defi_id')->index()->default(0);

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
        Schema::dropIfExists('user_risques');
    }
};
