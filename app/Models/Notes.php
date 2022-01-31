<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Notes extends Model
{
    use HasFactory , Notifiable;
    protected $table = "notes";
    protected $fillable = ['pengirim','penerima','isiPesan'];
}