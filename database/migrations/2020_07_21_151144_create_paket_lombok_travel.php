<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketLombokTravel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_lombok_travel', function (Blueprint $table) {
            $table->id();
            $table->string("nama_paket");
            $table->string("durasi");
            $table->string("tujuan");
            $table->string("fasilitas");
            $table->string("harga");
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
        Schema::dropIfExists('paket_lombok_travel');
    }
}
