<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_list', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('catalog_room_id');
            $table->string('nama');
            $table->string('ktp');
            $table->string('nohp');
            $table->date('checkin');
            $table->date('checkout');
            $table->integer('lama_menginap')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('booked_list');
    }
}
