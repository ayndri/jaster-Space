<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    
    protected $fillable = ['domHost', 'userHost', 'passHost'];
    protected $primaryKey = 'idHost';

    public function domain(){
        return $this->hasMany(Domain::class);
    }
}

