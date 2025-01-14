<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';
    protected $primaryKey = 'id_portfolio';

    protected $fillable = [
        'project_name',
        'deskripsi',
        'project_date',
        'foto',
    ];
}
