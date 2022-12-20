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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name') ->nullable();
            $table->string('email') ->nullable();
            $table->string('phone') ->nullable();
            $table->string('city') ->nullable();
            $table->string('address') ->nullable();
            $table->string('country') ->nullable();
            $table->string('product_title') ->nullable();
            $table->string('sprice') ->nullable();
            $table->string('quantity') ->nullable();
            $table->string('photo') ->nullable();
            $table->string('product_id') ->nullable();
            $table->string('user_id') ->nullable();
            $table->string('zip_code') ->nullable();
            $table->string('ordernote') ->nullable();
            $table->integer('delivery_charge') ->nullable();
            $table->string('payment_status') ->nullable();
            $table->string('delivery_status') ->nullable();
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
        Schema::dropIfExists('orders');
    }
};
