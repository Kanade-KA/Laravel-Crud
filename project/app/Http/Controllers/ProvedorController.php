<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use App\Models\Provedor;

class ProvedorController extends Controller
{
    public function index()
    {
        $prov = Provedor::all();
        return $prov;
    }

    public function store(Request $request)
    {
        $prov = new Provedor();
        $prov->nombre = $request->nombre;
        $prov->save();
    }

    public function update(Request $request, $id)
    {
        $prov = Provedor::findeOrFail($request->$id);
        $prov->nombre = $request->nombre;
        $prov->save();
    }

    public function destroy($id)
    {
        $$prov = Provedor::destroy($id);
        return $prov;
    }
}
