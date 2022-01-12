<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $table = "briefs";
    protected $fillable = ['idAkses', 'idOrder', 'idComp', 'logoBrief', 'colorBrief', 'waBrief', 'emailBrief', 'igBrief', 'passgramBrief', 'fbBrief', 'sosBrief', 'telBrief', 'mpBrief', 'reqBrief', 'postBrief', 'targetBrief'];
    protected $primaryKey = 'idBrief';
}
