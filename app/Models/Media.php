<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\Wisata;
use App\Models\Umkm;

class Media extends Model
{
    use HasFactory;
    protected $table        = 'media';
    protected $primaryKey   = 'id';
    protected $guarded      = [];

    public function wisata()
    {
        return $this->belongsToMany(Wisata::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}
