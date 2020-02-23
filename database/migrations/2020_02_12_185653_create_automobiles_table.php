<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedSmallInteger('model_id');
            $table->unsignedSmallInteger('year');
            $table->unsignedMediumInteger('mileage');
            $table->string('location', 60);
            $table->unsignedTinyInteger('damage_id');
            $table->unsignedInteger('current_rate');
            $table->unsignedTinyInteger('transmission_id');
            $table->unsignedBigInteger('additional_id');
            $table->uuid('VIN');
            $table->date('status');
            $table->timestamps();

            $table->foreign('model_id')
                ->references('id')
                ->on('models')
                ->onDelete('cascade');

            $table->foreign('damage_id')
                ->references('id')
                ->on('damages')
                ->onDelete('cascade');

            $table->foreign('transmission_id')
                ->references('id')
                ->on('transmissions')
                ->onDelete('cascade');

            $table->foreign('additional_id')
                ->references('id')
                ->on('additionals')
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
        Schema::dropIfExists('automobiles');
    }
}
