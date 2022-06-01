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
        Schema::create('technological_choises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('payment_method_id');
            $table->text('name');
            $table->text('brand');
            $table->text('model');
            $table->double('referential_value');
            $table->text('quotation_document');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
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
        Schema::dropIfExists('technological_choises');
    }
};
