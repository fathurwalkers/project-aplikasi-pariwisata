<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Media;
use App\Models\Login;
use App\Models\Umkm;
use App\Models\Produk;

class Wisata extends Model
{
    use HasFactory;
    protected $table        = 'wisata'; 
    protected $primaryKey   = 'id'; 
    protected $guarded      = []; 

    public function media()
    {
        return $this->belongsToMany(Media::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function umkm()
    {
        return $this->hasMany(Umkm::class); 
    }

    public function login()
    {
        return $this->belongsTo(Login::class);  
    }
}
