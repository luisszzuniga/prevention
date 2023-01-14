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
        Schema::table('feature_offer', function (Blueprint $table) {
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('CASCADE');
            $table->foreign('offer_id')->references('id')->on('offers')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feature_offer');
    }
};
