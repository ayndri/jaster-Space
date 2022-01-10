<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trx extends Model
{
    protected $table = "trxs";
    protected $casts = [
        'serTrx' => 'json',
        'qtyTrx' => 'json',
        'harTrx' => 'json'
    ];
    protected $fillable = ['idWeb', 'dpTrx', 'reTrx', 'payTrx', 'fromTrx', 'serTrx', 'qtyTrx', 'harTrx'];
    protected $primaryKey = 'idTrx';

    public function jweb()
  {
    return $this->belongsTo('App\Jweb', 'idWeb');
  }
}
