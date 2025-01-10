<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    protected $primaryKey = 'id_team';

    protected $fillable = [
        'jabatan',
        'nama_team',
        'foto',
    ];
}
