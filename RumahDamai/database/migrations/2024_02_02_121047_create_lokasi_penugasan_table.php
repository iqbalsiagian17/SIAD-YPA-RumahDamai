<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lokasi_penugasan', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('wilayah');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokasi_penugasan');
    }
};
