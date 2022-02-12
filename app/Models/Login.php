<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\Wisata;
use App\Models\Umkm;

class Login extends Model
{
    use HasFactory;
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }

    public function umkm()
    {
        return $this->hasMany(Umkm::class);
    }
}
