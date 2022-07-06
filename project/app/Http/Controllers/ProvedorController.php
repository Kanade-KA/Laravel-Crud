<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProvedorRequest;
use App\Http\Requests\UpdateProvedorRequest;
use Illuminate\Http\Request;
use App\Models\Provedor;

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
}
