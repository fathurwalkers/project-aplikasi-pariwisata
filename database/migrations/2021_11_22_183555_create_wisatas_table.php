<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    public function up()
    {
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('wisata_nama')->nullable();
            $table->longText('wisata_deskripsi')->nullable();
            $table->string('wisata_kota')->nullable();
            $table->string('wisata_kecamatan')->nullable();
            $table->string('wisata_kelurahan')->nullable();
            $table->string('wisata_provinsi')->nullable();
            $table->string('wisata_url')->nullable();
            $table->text('wisata_maps')->nullable();
            $table->string('wisata_header_foto')->nullable();

            $table->unsignedBigInteger('kategori_id')->nullable()->default(null);
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('wisata');
    }
}
