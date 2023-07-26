<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grid_criterion', function (Blueprint $table) {
            $table->unsignedBigInteger('criterion_id');
            $table->unsignedBigInteger('grid_id');

            $table->primary(['criterion_id', 'grid_id']);

            $table->foreign('criterion_id')->references('id')->on('criteria')->onDelete('cascade');
            $table->foreign('grid_id')->references('id')->on('grids')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grid_criterion', function (Blueprint $table) {
            $table->dropForeign(['criterion_id']);
            $table->dropForeign(['grid_id']);
        });

        Schema::dropIfExists('grid_criterion');
    }
};
