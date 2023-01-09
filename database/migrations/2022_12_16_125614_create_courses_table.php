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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('center_acp_name', 50);
            $table->text('observation')->nullable();
            $table->integer('seance_code')->nullable();
            $table->unsignedBigInteger('offer_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->unsignedBigInteger('user_id_trainer')->index();
            $table->unsignedBigInteger('user_id_learner')->index();
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
        Schema::dropIfExists('courses');
    }
};
