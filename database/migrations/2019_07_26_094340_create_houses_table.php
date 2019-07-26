<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
            $table->float('latitude');
            $table->float('longitude');
            $table->bigInteger('zone_id')->unsigned();
            $table->decimal('price');
            $table->integer('size');
            $table->integer('rooms');
            $table->integer('bathrooms');
            $table->boolean('air_conditioner');
            $table->integer('climate_id');
            $table->boolean('elevator');
            $table->integer('employee_id');
            $table->integer('housetype_id');
            $table->integer('contract_id');
            $table->date('date_published');
            $table->boolean('avaiable');
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
        Schema::dropIfExists('houses');
    }
}
