<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dependencia; // Asegúrate de usar el modelo correcto

class DependenciaController extends Controller
{
    public function list () {

        $Dependencias = Dependencia::all();

        $list = [];

        foreach($Dependencias as $Dependencia){

            $objetc = [

                "id" => $Dependencia->id,
                "name" => $Dependencia->name,
                "direccion" => $Dependencia->direccion,
                "correo" => $Dependencia->correo,
                "telefono" => $Dependencia->telefono,
                "created_at" => $Dependencia->created_at,
                "updated_at" => $Dependencia->updated_at

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }

    public function item ($id) {

        $Dependencia = Dependencia::where('id','=',$id)->first();

        $object = [

            "id" => $Dependencia->id,
            "name" => $Dependencia->name,
            "direccion" => $Dependencia->direccion,
            "correo" => $Dependencia->correo,
            "telefono" => $Dependencia->telefono,
            "created_at" => $Dependencia->created_at,
            "updated_at" => $Dependencia->updated_at

        ];

        return response()->json($object);

    }

    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3|max:50',
            'direccion'=> 'required|min:3|max:50',
            'correo'=> 'required|min:3|max:50',
            'telefono'=> 'required|min:3|max:50',
        ]);
        $Dependencia = Dependencia::create([
            "name"=> $data["name"],
            "direccion"=> $data["direccion"],
            "correo"=> $data["correo"],
            "telefono"=> $data["telefono"],
        ]);
        if($Dependencia){
            $object=[
                "response"=> "Dependencia created",
                "data"=> $Dependencia
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Dependencia not created",
                "data"=> $Dependencia
            ];
            return response()->json($object);
        }
    }

    public function update(Request $request) {
        $data = $request->validate([
            'id'=> 'required|min:1',
            'name'=> 'required|min:3|max:50',
            'direccion'=> 'required|min:3|max:50',
            'correo'=> 'required|min:3|max:50',
            'telefono'=> 'required|min:3|max:50',
        ]);

        $Dependencia = Dependencia::where('id','=',$data['id'])->first();
        if($Dependencia){
            $Dependencia->name = $data['name'];
            $Dependencia->direccion = $data['direccion'];
            $Dependencia->save();
            $object=["response"=> "Dependencia updated","data"=> $Dependencia];
            return response()->json($object);
        }else{
            $object=["response"=> "Dependencia not updated","data"=> $Dependencia];
            return response()->json($object);
        }
    }

    public function delete($id) {
        $Dependencia = Dependencia::where('id','=',$id)->first();
        if($Dependencia->delete()){
            $object=["response"=> "Dependencia deleted","data"=> $Dependencia
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Dependencia not deleted",
                "data"=> $Dependencia
            ];
            return response()->json($object);
        }
    }
}