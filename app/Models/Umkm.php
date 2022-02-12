<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wisata;
use App\Models\Produk;
use App\Models\Media;
use App\Models\Login;

class Umkm extends Model
{
    use HasFactory;
    protected $table        = 'umkm'; 
    protected $primaryKey   = 'id'; 
    protected $guarded      = []; 

    public function wisata()
    {
        return $this->belongsTo(Wisata::class);
    }

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function media()
    {
        return $this->belongsTo(Media::class); 
    }
}
