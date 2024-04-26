<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();
        return view('tipos.tipos', compact('tipos')); 
    }

    public function show($id)
    {
        return view('tipos.show');
    }

    public function TiposCrear()
    {
        return view('tipos.createtipos');
    }

    public function TipoCreate(Request $request)
    {
        $tipo = new Tipo();
        $tipo->name = $request->name;
        $tipo->dependencia_id = $request->dependencia_id;
        $tipo->save();

        return redirect()->route('tipos.tipos');
    }

    public function TiposEditar($id)
    {
        $tipo = Tipo::find($id);
        return view('tipos.EditTipos', compact('tipo'));
    }

    public function TiposEdit(Request $request, $id)
    {
        $tipo = Tipo::find($id);
        $tipo->name = $request->name;
        $tipo->dependencia_id = $request->dependencia_id;
        $tipo->save();

        return redirect()->route('tipos.tipos');
    }

    public function TiposDelete($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();

        return redirect()->route('tipos.tipos');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $tipos = Tipo::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('tipos.tipos', compact('tipos'));
    }
}

