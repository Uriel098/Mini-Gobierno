<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.users');
    }

    public function show($id)
    {
        return view('users.show');
    }

    public function UsersCrear()
    {
        return view('users.createusers');
    }

    public function UserCreate(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->ciudad = $request->ciudad;
        $user->curp = $request->curp;
        $user->save();

        return redirect()->route('users.users');
    }

    public function UsersEditar($id)
    {
        $user = User::find($id);
        return view('users.EditUsers', compact('user'));
    }

    public function UsersEdit(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->ciudad = $request->ciudad;
        $user->curp = $request->curp;
        $user->save();

        return redirect()->route('users.users');
    }

    public function UsersDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.users');
    }
}
