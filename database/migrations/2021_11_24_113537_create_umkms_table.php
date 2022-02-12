<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmkmsTable extends Migration
{
    public function up()
    {
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('umkm_nama')->nullable();
            $table->string('umkm_kode')->nullable();
            $table->longText('umkm_info')->nullable();
            $table->string('umkm_foto')->nullable()->default('default-profile-ukm.png');
            $table->text('umkm_pemilik')->nullable();

            $table->unsignedBigInteger('wisata_id')->nullable()->default(null);
            $table->foreign('wisata_id')->references('id')->on('wisata')->onDelete('cascade');

            $table->unsignedBigInteger('media_id')->nullable()->default(null);
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');

            $table->unsignedBigInteger('login_id')->nullable()->default(null);
            $table->foreign('login_id')->references('id')->on('login')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umkm');
    }
}
