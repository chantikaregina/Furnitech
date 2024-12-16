<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    protected  $table = 'background';
    protected  $primaryKey = 'id_background';

    protected $fillable = [
        'nama_gambar',
        'kategori',
    ];
}
