<?php

namespace App\Http\Controllers\Api;
//sd
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list () {

        $Users = User::all();

        $list = [];

        foreach($Users as $User){

            $objetc = [

                "id" => $User->id,
                "name" => $User->name,
                "telefono" => $User->telefono,
                "email" => $User->email,
                "email_verified_at" => $User->email_verified_at,
                "password" => $User->password,
                "ciudad" => $User->ciudad,
                "curp" => $User->curp,
                "remember_token" => $User->remember_token

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $User = User::where('id','=',$id)->first();

        $object = [

            "id" => $User->id,
            "name" => $User->name,
            "telefono" => $User->telefono,
            "email" => $User->email,
            "email_verified_at" => $User->email_verified_at,
            "password" => $User->password,
            "ciudad" => $User->ciudad,
            "curp" => $User->curp
            

        ];

        return response()->json($object);

    }
    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3,max:50',
            'telefono'=> 'required|min:3,max:50',
            'email'=> 'required|min:1,max:50',
            'password'=> 'required|min:1,max:50',
            'ciudad'=> 'required|min:1,max:50',
            'curp'=> 'required|min:1,max:50'

        ]);
        
        $User = User::create([
            'name'=> $data['name'],
            'telefono'=> $data['telefono'],
            'email'=> $data['email'],
            'password'=> $data['password'],
            'ciudad'=> $data['ciudad'],
            'curp'=> $data['curp']

        ]);

        if ($User) {
            $object = [

                "response" => 'Succes.Itemsaved correctly.',
                "data" => $User
    
            ];
    
            return response()->json($object);
        }else {
            $object = [

                "response" => 'Error:Something went wrong, please try again.',
    
            ];
    
            return response()->json($object);
        }

    }

    public function update(Request $request){
        $data = $request->validate([
            'id'=> 'required|min:1',
            'name'=> 'required|min:3,max:50',
            'telefono'=> 'required|min:3,max:50',
            'email'=> 'required|min:1,max:50',
            'password'=> 'required|min:1,max:50',
            'ciudad'=> 'required|min:1,max:50',
            'curp'=> 'required|min:1,max:50'
            
        ]);
        
        $user = User::where("id","=", $data['id'])->first();
        $user->name=$data['name'];
        $user->telefono=$data['telefono'];
        $user->email=$data['email'];
        $user->password=$data['password'];
        $user->ciudad=$data['ciudad'];
        $user->curp=$data['curp'];
        
        if($user->update()){
            $object =[
            "response"=>'Sucess. Item update successfully.',
            "data"=> $user
            ];

            return response()->json($object);
        } else {
            $object = [

                "response" => 'Error:Something went wrong, please try again.',
    
            ];
    
            return response()->json($object);
        }
    }
}