<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trx extends Model
{
  
    protected $table = "trxs";
    protected $fillable = ['idOrder', 'paketTrx', 'qtyTrx', 'hargaTrx'];
    protected $primaryKey = 'idTrx';

}
