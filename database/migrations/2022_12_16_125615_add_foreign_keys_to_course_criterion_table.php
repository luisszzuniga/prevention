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
        Schema::table('course_criterion', function (Blueprint $table) {
            $table->foreign('criterion_id')->references('id')->on('criteria')->onDelete('CASCADE');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_criterion', function (Blueprint $table) {
            $table->dropForeign('FK_courses_criteria');
            $table->dropForeign('FK_criteria_courses');
        });
    }
};
