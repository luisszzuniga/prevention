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
        Schema::table('trainings', function (Blueprint $table) {
            $table->foreign(['center_id'], 'FK_trainings_centers')->references('id')->on('centers')->onDelete('CASCADE');
            $table->foreign(['user_id_learner'], 'FK_trainings_users_learner')->references('id')->on('users')->onDelete('CASCADE');
            $table->foreign(['offer_id'], 'FK_offers_trainings')->references('id')->on('offers')->onDelete('CASCADE');
            $table->foreign(['user_id_trainer'], 'FK_trainings_users_trainer')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainings', function (Blueprint $table) {
            $table->dropForeign('FK_trainings_centers');
            $table->dropForeign('FK_trainings_users_learner');
            $table->dropForeign('FK_offers_trainings');
            $table->dropForeign('FK_trainings_users_trainer');
        });
    }
};
