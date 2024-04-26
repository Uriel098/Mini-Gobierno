<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    public function list () {

        $Tipos = Tipo::all();

        $list = [];

        foreach($Tipos as $Tipo){

            $objetc = [

                "id" => $Tipo->id,
                "name" => $Tipo->name,
                "dependencia_id" => $Tipo->dependencia_id,
                "created_at" => $Tipo->created_at,
                "updated_at" => $Tipo->updated_at

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Tipo = Tipo::where('id','=',$id)->first();

        $object = [

            "id" => $Tipo->id,
            "name" => $Tipo->name,
            "dependencia_id" => $Tipo->dependencia_id,
            "created_at" => $Tipo->created_at,
            "updated_at" => $Tipo->updated_at

        ];

        return response()->json($object);

    }
    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3,max:50',
            'dependencia_id'=> 'required|min:3,max:50',            
        ]);
        $Tipo = Tipo::create([
            "name"=> $data["name"],
            "dependencia_id"=> $data["dependencia_id"],
        ]);
        if($Tipo){
            $object=[
                "response"=> "Tipo created",
                "data"=> $Tipo
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tipo not created",
                "data"=> $Tipo
            ];
            return response()->json($object);
        }
    }
    public function update(Request $request) {
        $data = $request->validate([
            'id'=> 'required|min:1',
            'name'=> 'required|min:3,max:50',
            'dependencia_id'=> 'required|min:3,max:50',
        ]);
        $Tipo = Tipo::where('id','=',$data['id'])->first();
        if($Tipo){
            $Tipo->id = $data['id'];
            $Tipo->name = $data['name'];
            $Tipo->dependencia_id = $data['dependencia_id'];
            $Tipo->save();
            $object=["response"=> "Tipo updated","data"=> $Tipo];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tipo not updated",
                "data"=> $Tipo
            ];
            return response()->json($object);
            }
    }
    public function delete($id) {
        $Tipo = Tipo::where('id','=',$id)->first();
        if($Tipo->delete()){
            $object=[
                "response"=> "Tipo deleted",
                "data"=> $Tipo
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tipo not deleted",
                "data"=> $Tipo
            ];
            return response()->json($object);
        }
    }

}
