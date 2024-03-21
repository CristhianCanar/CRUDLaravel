<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];
}

// Crear un nuevo producto
$producto = new Producto();
$producto->nombre = 'Laptop';
$producto->descripcion = 'Powerful laptop for work and gaming';
$producto->precio = 1200.00;
$producto->save();

// Leer un producto por su ID
$producto = Producto::find(1);
echo $producto->nombre;

// Actualizar un producto
$producto = Producto::find(1);
$producto->nombre = 'Desktop Computer';
$producto->save();

// Eliminar un producto
$producto = Producto::find(1);
$producto->delete();



