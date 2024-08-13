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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->integer('user_id');
            $table->integer('owner_id');
            $table->string('name');
            $table->string('select');
            $table->string('property');
            $table->string('price');
            $table->string('contact');
            $table->string('location');
            $table->string('photo');
            $table->string('prophoto');
            $table->longText('message');
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
        Schema::dropIfExists('cart');
    }
};
