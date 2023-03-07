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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('address')->unique();
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->string('vat')->unique();
            $table->time('opening_time');
            $table->time('closing_time');
            $table->string('phone_number')->unique();
            $table->decimal('price_shipping', 2, 1);
            $table->boolean('sponsored')->nullable();
            // FOREIGN KEY
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //
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
        Schema::dropIfExists('restaurants');
    }
};
