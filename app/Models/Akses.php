<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akses extends Model
{
    protected $table = "aksess";
    protected $fillable = ['idWeb', 'domAks', 'userAks', 'passAks'];
    protected $primaryKey = 'idAkses';

    public function jweb()
  {
    return $this->belongsTo('App\Jweb', 'idWeb');
  }
}
