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
        Schema::create('criterion_theme', function (Blueprint $table) {
            $table->unsignedBigInteger('criterion_id');
            $table->unsignedBigInteger('theme_id');
            $table->primary(['criterion_id', 'theme_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criterion_theme');
    }
};
