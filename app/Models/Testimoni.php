<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected  $table = 'testimonis';
    protected  $primaryKey = 'id_testimoni';

    protected $fillable = [
        'name',
        'email',
        'review',
        'rating',
    ];
}
