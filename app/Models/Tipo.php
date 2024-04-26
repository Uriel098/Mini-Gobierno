<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'dependencia_id',];
    
    
    public function Dependencia(){
        return $this->belongsTo(Dependencia::class);
    }
}

