<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaWisatasTable extends Migration
{
    public function up()
    {
        Schema::create('media_wisata', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('media_id')->nullable()->default(null);
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');

            $table->unsignedBigInteger('wisata')->nullable()->default(null);
            $table->foreign('wisata')->references('id')->on('wisata')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_wisata');
    }
}
