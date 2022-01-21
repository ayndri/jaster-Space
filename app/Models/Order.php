<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";
    protected $fillable = ['idBrief', 'idAkses', 'idUser', 'idComp', 'dpTrx', 'renew', 'pmOrder', 'deadlineTrx', 'fromTrx', 'jenisOrder', 'totalOrder', 'statusOrder', 'pmOrder'];
    protected $primaryKey = 'idOrder';

    protected $dates = ['created_at'];
}

