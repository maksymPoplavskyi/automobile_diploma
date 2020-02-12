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
            $table->string('fuel')->nullable();
            $table->string('has_key')->nullable();
            $table->string('drive_unit')->nullable();
            $table->text('state');
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
