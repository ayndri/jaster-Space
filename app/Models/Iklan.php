<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    protected $fillable = ['namaAds', 'saldoAds', 'akunAds', 'mulaiAds', 'selesaiAds', 'statAds', 'nowAds' ,'sisaAds', 'totalAds', 'noteAds'];
    protected $primaryKey = 'idAds';
}
