<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('harga')->default(250000);
            $table->integer('harga_tambahan')->default(100000);
            $table->boolean('is_ready')->default(true);
            $table->string('jenis_mobil');
            $table->string('warna');
            $table->string('tahun');
            $table->string('kapasitas');
            $table->string('gambar');
            $table->integer('jenismobil_id');
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
        Schema::dropIfExists('mobils');
    }
}
