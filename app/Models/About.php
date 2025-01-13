<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'abouts';
    protected $primaryKey = 'id_about';

    protected $fillable = [
        'background',
        'visi',
        'misi',
        'foto1',
        'foto2',
    ];
}
