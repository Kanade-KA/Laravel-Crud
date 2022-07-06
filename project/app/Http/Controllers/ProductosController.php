<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductosRequest;
use App\Http\Requests\UpdateProductosRequest;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Provedor;

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
        $productos->provedor=$request->provedor;
        $productos->save();
        return "SE HA AGREGADO";
    }

    public function update(Request $request, $id)
    {
        $productos = Productos::findOrFail($request->id);
        $productos->nombre = $request->nombre;
        $productos->precio = $request->precio;
        $productos->provedor=$request->provedor;
        $productos->save();
        return "SE HA MODIFICADO";
    }

    public function destroy($id)
    {
        $product = Productos::destroy($id);
        return "SE HA ELIMINADO";
    }

}
