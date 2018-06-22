<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('house_type_id');
            $table->foreign('house_type_id')->references('id')->on('house_types');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('rent_time_id');
            $table->foreign('rent_time_id')->references('id')->on('rent_times');
            $table->integer('rooms');
            $table->integer('floor');
            $table->integer('total_floor');
            $table->integer('total_area');
            $table->integer('kitchen_area');
            $table->integer('living_area');
            $table->text('description');
            $table->decimal('price');
            $table->string('street');
            $table->string('house_number');
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('flats');
    }
}
