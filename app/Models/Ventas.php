<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas';
    public $timestamps = false;
    public $fillable = ['Nombre_Producto','Descripcion_Producto','Cantidad_Producto','Imagen_Producto'];
}
