<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Productos;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        return $productos;
    }

    public function store(Request $request)
    {
        $productos = new Productos();
        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->save();
    }

    public function update(Request $request, $id)
    {
        $productos = Productos::findeOrFail($request->$id);
        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->save();
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
