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
            $table->string('latitude');
            $table->string('longitude');
            $table->bigInteger('zone_id')->unsigned();
            $table->decimal('price');
            $table->integer('size');
            $table->integer('rooms');
            $table->integer('bathrooms')
            $table->boolean('elevator')->default(false);
            $table->boolean('available')->default(false);
            $table->boolean('parking')->default(false);
            $table->boolean('air_conditioner')->default(false);
            $table->bigInteger('climate_id')->unsigned();
            $table->bigInteger('employee_id')->unsigned();
            $table->bigInteger('housetype_id')->unsigned();
            $table->bigInteger('contract_id')->unsigned();
            $table->date('date_published')->default(now());
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
