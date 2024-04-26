<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tramite;

class TramiteController extends Controller
{
    public function list () {

        $Tramites = Tramite::all();

        $list = [];

        foreach($Tramites as $Tramite){

            $objetc = [

                "id" => $Tramite->id,
                "name" => $Tramite->name,
                "tipo_id"=> $Tramite->tipo_id,
                "precio"=>$Tramite->precio,
                "user_id"=>$Tramite->user_id,
                "status" => $Tramite->status,
                "created_at" => $Tramite->created_at,
                "updated_at" => $Tramite->updated_at

            ];

            array_push($list,$objetc);
        }
        return response()->json($list);
    }
    public function item ($id) {

        $Tramite = Tramite::where('id','=',$id)->first();

        $object = [

            "id" => $Tramite->id,
            "name" => $Tramite->name,
            "tipo_id"=> $Tramite->tipo_id,
            "precio"=>$Tramite->precio,
            "user_id"=>$Tramite->user_id,
            "status" => $Tramite->status,
            "created_at" => $Tramite->created_at,
            "updated_at" => $Tramite->updated_at

        ];

        return response()->json($object);

    }
    public function create(Request $request) {
        $data = $request->validate([
            'name'=> 'required|min:3,max:50',
            'tipo_id'=> 'required|min:3,max:50',
            'precio'=> 'required|min:3,max:50',
            'user_id'=> 'required|min:3,max:50',
            'status'=> 'required|min:3,max:50',
        ]);
        $Tramite = Tramite::create([
            "name"=> $data["name"],
            "tipo_id"=> $data["tipo_id"],
            "precio"=> $data["precio"],
            "user_id"=> $data["user_id"],
            "status"=> $data["status"],
        ]);
        if($Tramite){
            $object=[
                "response"=> "Tramite created",
                "data"=> $Tramite
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tramite not created",
                "data"=> $Tramite
            ];
            return response()->json($object);
        }
    }
    public function update(Request $request) {
        $data = $request->validate([
            'id'=> 'required|min:1',
            'name'=> 'required|min:3,max:50',
            'tipo_id'=> 'required|min:3,max:50',
            'precio'=> 'required|min:3,max:50',
            'user_id'=> 'required|min:3,max:50',
            'status'=>'required|min:3,max:50',
        ]);
        $Tramite = Tramite::where('id','=',$data['id'])->first();
        if($Tramite){
            $Tramite->name = $data['name'];
            $Tramite->tipo_id = $data['tipo_id'];
            $Tramite->precio = $data['precio'];
            $Tramite->user_id = $data['user_id'];
            $Tramite->status = $data['status'];
            $Tramite->save();
            $object=["response"=> "Tramite updated","data"=> $Tramite
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tramite not updated",
                "data"=> $Tramite
            ];
            return response()->json($object);
        }

    }
    public function delete($id) {
        $Tramite = Tramite::where('id','=',$id)->first();
        if($Tramite->delete()){
            $object=[
                "response"=> "Tramite deleted",
                "data"=> $Tramite
            ];
            return response()->json($object);
        }else{
            $object=[
                "response"=> "Tramite not deleted",
                "data"=> $Tramite
            ];
            return response()->json($object);
        }
    }

}

