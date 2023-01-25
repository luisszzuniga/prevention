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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign(['company_id'], 'FK_users_companies')->references('id')->on('companies')->onDelete('CASCADE');
            $table->foreign(['role_id'], 'FK_users_roles')->references('id')->on('roles')->onDelete('CASCADE');
            $table->foreign('trainer_id')->references('id')->on('users')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('FK_users_companies');
            $table->dropForeign('FK_users_roles');
        });
    }
};
