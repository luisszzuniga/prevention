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
        Schema::table('criterion_theme', function (Blueprint $table) {
            $table->foreign(['theme_id'], 'FK_criteria_themes')->references('id')->on('themes')->onDelete('CASCADE');
            $table->foreign(['criterion_id'], 'FK_themes_criteria')->references('id')->on('criteria')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criterion_theme', function (Blueprint $table) {
            $table->dropForeign('FK_criteria_themes');
            $table->dropForeign('FK_themes_criteria');
        });
    }
};
