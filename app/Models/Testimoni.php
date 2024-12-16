<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected  $table = 'testimoni';
    protected  $primaryKey = 'id_testimoni';

    protected $fillable = [
        'nama_pelanggan',
        'testimoni',
        'rating',
    ];
}
