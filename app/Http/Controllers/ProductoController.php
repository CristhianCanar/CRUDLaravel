<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('productos.index', ['productos' => $productos]);
    }

    public function create(){
        return view('productos.create');
    }
    
    public function almacenar(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->save();

        return redirect(route('productos'));
    }
    public function editar($id){
        // Para ustedes: 
        $producto = Producto::where('id_producto',$id)->first();
        return view('productos.editar', ['producto' => $producto]);
    }

    public function actualizar(Request $request, $id){
        $producto = Producto::where('id', $id)->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);
        if ($producto) {
            return redirect(url('/productos'));
        }
        return 0;
    }

    public function eliminar($id){
        $producto = Producto::where('id', $id)->delete();
        if ($producto) {
            return redirect(url('/productos'));
        }
        return 0;
    }

}
