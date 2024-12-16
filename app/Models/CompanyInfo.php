<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $table = 'company_info';
    protected $primaryKey = 'id_company_info';

    protected $fillable = [
        'company_name',
        'slogan',
        'deskripsi',
        'tahun_berdiri',
        'alamat',
        'email',
        'telepon',
        'logo',
    ];
}
