<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TramiteController extends Controller
{
    public function index()
    {
        $tramites = Store::all();
        return view('tramites.tramites', compact('tramites')); 
    }

    public function show($id)
    {
        return view('tramites.show');
    }

    public function TramitesCrear()
    {
        return view('tramites.createtramites');
    }

    public function TramiteCreate(Request $request)
    {
        $tramite = new Tramite();
        $tramite->name = $request->name;
        $tramite->precio = $request->precio;
        $tramite->status = $request->status;
        $tramite->save();

        return redirect()->route('tramites.tramites');
    }

    public function TramitesEditar($id)
    {
        $tramite = Tramite::find($id);
        return view('tramites.EditTramites', compact('tramite'));
    }

    public function TramitesEdit(Request $request, $id)
    {
        $tramite = Tramite::find($id);
        $tramite->name = $request->name;
        $tramite->precio = $request->precio;
        $tramite->status = $request->status;
        $tramite->save();

        return redirect()->route('tramites.tramites');
    }

    public function TramitesDelete($id)
    {
        $tramite = Tramite::find($id);
        $tramite->delete();

        return redirect()->route('tramites.tramites');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $tramites = Tramite::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('tramites.tramites', compact('tramites'));
    }

}