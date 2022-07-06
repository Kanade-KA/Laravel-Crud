<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvedorRequest;
use App\Http\Requests\UpdateProvedorRequest;
use App\Http\Requests\StoreProductosRequest;
use App\Http\Requests\UpdateProductosRequest;
use Illuminate\Http\Request;
use App\Models\Provedor;
use App\Models\Productos;

class ProvedorController extends Controller
{
    public function index()
    {
        $provedor = Provedor::all();
        return $provedor;
    }

    public function store(Request $request)
    {
        $provedor = new Provedor();
        $provedor->nombre = $request->nombre;
        $provedor->save();
        return "SE HA AGREGADO";
    }

    public function update(Request $request, $id)
    {
        $provedor = Provedor::findOrFail($request->id);
        $provedor->nombre = $request->nombre;
        $provedor->save();
        return "SE HA MODIFICADO";
    }

    public function destroy($id)
    {
        $provedor = Provedor::destroy($id);
        return $provedor;
        return "SE HA ELIMINADO";
    }

    public function relation(){
        $provedor  = Provedor::all();
        $data="";
        foreach ($provedor as $value)
        {
            $data.=$value->nombre."\n";
            $id = $value->id;
            $producto = Productos::select('nombre')
            ->whereprovedor($id)->get();
            $data.=$producto."\n";
        }
        return $data;
    }
}
