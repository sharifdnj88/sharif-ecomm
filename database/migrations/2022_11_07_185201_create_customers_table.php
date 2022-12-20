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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fullname') -> nullable();
            $table->string('email') -> unique();
            $table->string('phone') -> nullable();
            $table->string('password');
            $table->string('access_token') -> nullable();
            $table->text('address') -> nullable();
            $table->string('city') -> nullable();
            $table->string('zip_code') -> nullable();
            $table->string('country') -> nullable();
            $table->string('photo') -> default('avatar.png');
            $table->string('ordernote') ->nullable();
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);
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
        Schema::dropIfExists('customers');
    }
};
