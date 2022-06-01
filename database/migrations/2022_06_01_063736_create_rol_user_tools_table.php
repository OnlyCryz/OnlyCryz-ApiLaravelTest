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
        Schema::create('rol_user_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_user_id');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('tool_id');
            $table->text('reason')->nullable();
            $table->foreign('role_user_id')->references('id')->on('roles_users');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('tool_id')->references('id')->on('tools');
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
        Schema::dropIfExists('rol_user_tools');
    }
};
