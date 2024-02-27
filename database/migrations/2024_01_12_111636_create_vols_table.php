<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airport_depart_id');
            $table->foreign('airport_depart_id')->references('id')->on('airports')->onDelete('cascade');
            $table->unsignedBigInteger('airport_arrivee_id');
            $table->foreign('airport_arrivee_id')->references('id')->on('airports')->onDelete('cascade');
            $table->unsignedBigInteger('avion_id')->nullable();
            $table->foreign('avion_id')->references('id')->on('avions')->onDelete('cascade');
            $table->integer('date_depart');
            $table->integer('date_arivie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vols');
    }
};
