<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    use HasFactory;
    protected $table = "aksess";
    protected $fillable = [
        'idOrder',
        'idBrief',
        'domainAkses',
        'userAkses',
        'passAkses',
        'host_id'];
    protected $primaryKey = 'idAkses';

  public function hosting()
  {
      return $this->belongsTo(Host::class,'host_id', 'idHost');
  }
}