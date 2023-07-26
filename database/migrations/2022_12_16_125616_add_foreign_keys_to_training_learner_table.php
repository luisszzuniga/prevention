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
        Schema::table('course_learner', function (Blueprint $table) {
            $table->foreign('user_id_Learner')->references('id')->on('users');
            $table->foreign('training_id')->references('id')->on('trainings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_learner', function (Blueprint $table) {
            $table->dropForeign('course_learner_user_id_Learner_foreign');
            $table->dropForeign('course_learner_training_id_foreign');
        });
    }
};
