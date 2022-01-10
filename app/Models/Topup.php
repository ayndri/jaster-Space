<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{  
    protected $fillable = ['idAds', 'saldoTop', 'tglTop', 'doneTop', 'created_at','updated_at'];
    protected $primaryKey = 'idTop';
}
