<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('iata', 2);
            $table->string('icao', 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('airports');
    }
};
