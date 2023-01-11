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
        Schema::create('offer_feature', function (Blueprint $table) {
            $table->unsignedBigInteger('offer_id');
            $table->unsignedBigInteger('feature_id');
            $table->primary(['offer_id', 'feature_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_feature');
    }
};
