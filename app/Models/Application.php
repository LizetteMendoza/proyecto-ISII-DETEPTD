<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','nombre','curp','direccion','imf','edad','telefono','sexo','escolaridad','plantel','etnia'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function limitations(){
            return $this->belongsToMany(Limitation::class);
            
    }
}


