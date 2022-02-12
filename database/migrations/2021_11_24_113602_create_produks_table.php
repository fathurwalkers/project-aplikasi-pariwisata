<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('produk_headergambar')->nullable(); 
            $table->string('produk_nama')->nullable(); 
            $table->string('produk_kode')->nullable(); 
            $table->longText('produk_keterangan')->nullable(); 
            $table->string('produk_harga')->nullable(); 
            // $table->string('produk_rating')->nullable(); 
            // $table->string('produk_terjual')->nullable(); 

            $table->unsignedBigInteger('media_id')->nullable()->default(null);
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');

            $table->unsignedBigInteger('kategori_id')->nullable()->default(null);
            $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
                        
            $table->unsignedBigInteger('umkm_id')->nullable()->default(null);
            $table->foreign('umkm_id')->references('id')->on('umkm')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
