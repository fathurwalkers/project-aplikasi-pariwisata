<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaWisata extends Model
{
    use HasFactory;

    protected $table = 'media_wisata';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
