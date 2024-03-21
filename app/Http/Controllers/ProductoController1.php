<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', ['productos' => $productos]);
    }
    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Guardar un nuevo producto
    public function store(Request $request)
    {
        $product = new Producto();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();
        return redirect('/productos');
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $product = Producto::findOrFail($id);
        return view('productos.show', ['product' => $product]);
    }

    // Mostrar el formulario para editar un producto
    public function edit($id)
    {
        $product = Producto::findOrFail($id);
        return view('productos.edit', ['product' => $product]);
    }

    // Actualizar un producto
    public function update(Request $request, $id)
    {
        $product = Producto::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->save();
        return redirect('/productos');
    }

    // Eliminar un producto
    public function destroy($id)
    {
        $product = Producto::findOrFail($id);
        $product->delete();
        return redirect('/productos');
    }
}
