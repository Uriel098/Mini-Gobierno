<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'tipo_id','precio','user_id','status'];

    public function Tipo(){
        return $this->belongsTo(Tipo::class);
    }


    public function User(){
    return $this->belongsTo(User::class);
    }
}

