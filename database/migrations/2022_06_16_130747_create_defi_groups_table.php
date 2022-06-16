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
        Schema::create('defi_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('number_of_risks');

            /* si défi associé au groupe */
            $table->unsignedBigInteger('group_id')->index()->default(0);
            //$table->foreign('group_id')->references('id')->on('groups');

            /* si défi associé à l'usager */
            $table->unsignedBigInteger('user_id')->index()->default(0);
            //$table->foreign('user_id')->references('id')->on('users');

            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('defi_group');
    }
};
