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
        Schema::table('courses', function (Blueprint $table) {
            $table->foreign(['vehicle_id'], 'FK_courses_vehicles')->references('id')->on('vehicles')->onDelete('CASCADE');
            $table->foreign(['user_id_learner'], 'FK_courses_users_learner')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign(['offer_id'], 'FK_offers_courses')->references('id')->on('offers')->onDelete('CASCADE');
            $table->foreign(['user_id_trainer'], 'FK_courses_users_trainer')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign('FK_courses_vehicles');
            $table->dropForeign('FK_courses_users_learner');
            $table->dropForeign('FK_offers_courses');
            $table->dropForeign('FK_courses_users_trainer');
        });
    }
};
