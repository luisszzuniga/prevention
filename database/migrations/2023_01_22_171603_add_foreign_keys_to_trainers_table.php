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
        Schema::table('trainers', function (Blueprint $table) {
            $table->foreign('user_id', 'trainers_users_id_foreign')->references('id')->on('users');
            $table->foreign('training_id', 'trainers_trainings_id_foreign')->references('id')->on('trainings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainers', function (Blueprint $table) {
            $table->dropForeign(['trainers_users_id_foreign']);
            $table->dropForeign(['trainers_trainings_id_foreign']);
        });
    }
};
