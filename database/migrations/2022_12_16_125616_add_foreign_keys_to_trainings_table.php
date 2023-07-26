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
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('CASCADE');
            $table->foreign('center_id')->references('id')->on('centers')->onDelete('CASCADE');
            $table->foreign('user_id_trainer')->references('id')->on('users')->onDelete('CASCADE');
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
            $table->dropForeign('trainings_offer_id_foreign');
            $table->dropForeign('trainings_center_id_foreign');
            $table->dropForeign('trainings_user_id_trainer_foreign');
        });
    }
};
