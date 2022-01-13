<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jweb extends Model
{
    protected $table = "jwebs";
    protected $fillable = ['brandWeb', 'namaWeb', 'colorWeb', 'logoWeb', 'postWeb', 'targetWeb', 'reqWeb', 'picWeb', 'jabatWeb', 'waWeb', 'mailWeb', 'addrWeb'];
    protected $primaryKey = 'idWeb';

    public function akses()
    {
        return $this->hasMany('App\Akses');
    }

    public function trx()
    {
        return $this->hasMany('App\Trx');
    }
}

