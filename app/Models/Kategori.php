<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produk;
use App\Models\Wisata;

class Kategori extends Model
{
    use HasFactory; 
    protected $table        = 'kategori'; 
    protected $primaryKey   = 'id'; 
    protected $guarded      = []; 

    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
    
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
