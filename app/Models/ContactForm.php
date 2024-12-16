<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected  $table = 'contactform';
    protected  $primaryKey = 'id_contactform';

    protected $fillable = [
        'nama_pengirim',
        'email_pengirim',
        'pesan',
        'nomer_telepon',
    ];
}
