<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = "orders";
    protected $fillable = ['idBrief', 'idAkses', 'idUser', 'idComp', 'dpTrx', 'renew', 'pmOrder', 'deadlineTrx', 'fromTrx', 'jenisOrder', 'totalOrder', 'statusWeb', 'pmOrder'];
    protected $primaryKey = 'idOrder';

    protected $dates = ['created_at'];

    public function users()
    {
        return $this->belongsTo(User::class,'idUser','idUser');
    }

    public function domain() {
        return $this->hasOne(Akses::class,'idOrder','idOrder');
    }
}

