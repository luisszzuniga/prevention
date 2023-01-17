<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('lastname',35);
            $table->string('firstname',35);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone',10);
            $table->string('password', 60);
            $table->string('address', 100);
            $table->char('zip_code', 5)->nullable();
            $table->string('town', 35)->nullable();
            $table->rememberToken();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('user_id_trainer')->index('user_id_trainer')->nullable();
            $table->unsignedBigInteger('user_id_learner')->index('user_id_learner')->nullable();
            $table->unsignedBigInteger('role_id')->default(1);
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
        Schema::dropIfExists('users');
    }
};
