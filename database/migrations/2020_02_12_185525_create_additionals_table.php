<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additionals', function (Blueprint $table) { // доп инфо авто
            $table->bigIncrements('id');
            $table->string('color')->nullable();
            $table->string('engine')->nullable();
            $table->integer('count_of_cylinders')->nullable();
            $table->unsignedTinyInteger('fuel_id')->nullable();
            $table->unsignedTinyInteger('driver_unit_id')->nullable();
            $table->string('has_key')->nullable();
            $table->text('state')->nullable();

            $table->foreign('fuel_id')
                ->references('id')
                ->on('fuels')
                ->onDelete('cascade');

            $table->foreign('driver_unit_id')
                ->references('id')
                ->on('driver_units')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('additionals');
    }
}
