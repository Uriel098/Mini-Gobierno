<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    public function index()
    {
        $dependencias = Dependencia::all();
        return view('dependencias.dependencias', compact('dependencias')); 
    }

    public function show($id)
    {
        return view('dependencias.show');
    }

    public function DependenciasCrear()
    {
        return view('dependencias.createdependencias');
    }

    public function DependenciaCreate(Request $request)
    {
        $dependencia = new Dependencia();
        $dependencia->name = $request->name;
        $dependencia->direccion = $request->direccion;
        $dependencia->correo = $request->correo;
        $dependencia->telefono = $request->telefono;
        $dependencia->save();

        return redirect()->route('dependencias.dependencias');
    }

    public function DependenciasEditar($id)
    {
        $dependencia = Dependencia::find($id);
        return view('dependencias.EditDependencias', compact('dependencia'));
    }

    public function DependenciasEdit(Request $request, $id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->name = $request->name;
        $dependencia->direccion = $request->direccion;
        $dependencia->correo = $request->correo;
        $dependencia->telefono = $request->telefono;
        $dependencia->save();

        return redirect()->route('dependencias.dependencias');
    }

    public function DependenciasDelete($id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->delete();

        return redirect()->route('dependencias.dependencias');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $dependencias = Dependencia::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('dependencias.dependencias', compact('dependencias'));
    }
}


