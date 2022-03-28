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
        Schema::create('risque_thematique', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('risque_id')->index();
            $table->foreign('risque_id')->references('id')
                ->on('risques')
                ->onDelete('cascade');

            $table->unsignedBigInteger('thematique_id')->index();
            $table->foreign('thematique_id')->references('id')
                ->on('thematiques')
                ->onDelete('cascade');

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
        Schema::dropIfExists('risque_thematique');
    }
};
