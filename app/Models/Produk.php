<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Media;
use App\Models\Login;
use App\Models\Umkm;
use App\Models\Wisata;
use App\Models\Mediaproduk;

class Produk extends Model
{
    use HasFactory;
    protected $table        = 'produk';
    protected $primaryKey   = 'id';
    protected $guarded      = [];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }

    public function mediaproduk()
    {
        return $this->hasMany(Mediaproduk::class);
    }
}
