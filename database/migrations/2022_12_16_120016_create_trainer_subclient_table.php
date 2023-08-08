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
        Schema::create('trainer_subclient', function (Blueprint $table) {
            $table->unsignedBigInteger('subclient_id');
            $table->unsignedBigInteger('trainer_id');
            $table->primary(['subclient_id', 'trainer_id']);
            $table->foreign('subclient_id')->references('id')->on('subclients')->onDelete('cascade');
            $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('cascade'); // assuming trainers are also users
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
        Schema::dropIfExists('trainer_subclient');
    }
};
