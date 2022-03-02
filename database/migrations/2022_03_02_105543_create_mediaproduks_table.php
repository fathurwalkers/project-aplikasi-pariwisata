<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaproduksTable extends Migration
{
    public function up()
    {
        Schema::create('media_produk', function (Blueprint $table) {
            $table->id();

            $table->string('media_produk_nama')->nullable();

            $table->unsignedBigInteger('produk_id')->nullable()->default(null);
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_produk');
    }
}
