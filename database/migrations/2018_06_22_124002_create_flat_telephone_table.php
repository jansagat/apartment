<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatTelephoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flat_telephone', function (Blueprint $table) {
            $table->unsignedInteger('flat_id');
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->unsignedInteger('telephone_id');
            $table->foreign('telephone_id')->references('id')->on('telephones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flat_telephone');
    }
}
