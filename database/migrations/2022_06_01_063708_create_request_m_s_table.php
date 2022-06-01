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
        Schema::create('request_m_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_user_id');
            $table->text('summary');
            $table->text('description');
            $table->text('version');
            $table->timestamp('start_use_date');
            $table->timestamp('end_use_date');
            $table->text('exploratory_document');
            $table->text('reporting_status_document');
            $table->foreign('role_user_id')->references('id')->on('roles_users');
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
        Schema::dropIfExists('request_m_s');
    }
};
