<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'product_name',
        'deskripsi',
        'category',
        'harga',
        'stock',
        'foto',
    ];
}
