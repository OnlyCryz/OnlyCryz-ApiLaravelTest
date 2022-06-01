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
        Schema::create('responsible_area_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('responsible_area_id');
            $table->unsignedBigInteger('tool_id');
            $table->foreign('responsible_area_id')->references('id')->on('responsible_areas');
            $table->foreign('tool_id')->references('id')->on('tools');
            $table->integer('quantity');
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
        Schema::dropIfExists('responsible_area_tools');
    }
};
