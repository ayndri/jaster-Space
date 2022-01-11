<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaDomain','host_id'
    ];

    public function hosting()
    {
        return $this->belongsTo(Host::class,'host_id', 'idHost');
    }
}
