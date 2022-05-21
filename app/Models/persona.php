<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table='persona';
    protected $fillable=[
        'id',
        'nombre',
        'apellido',
        'deireccion',
        'telefono'
    ]
}
