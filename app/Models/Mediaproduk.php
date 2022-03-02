<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;

class Mediaproduk extends Model
{
    use HasFactory;
    protected $table        = 'media_produk';
    protected $primaryKey   = 'id';
    protected $guarded      = [];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
