<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','nombre','curp','direccion','imf','edad','telefono','sexo','escolaridad','plantel','etnia', 'localidad'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function limitations(){
            return $this->belongsToMany(Limitation::class);
            
    }

    /*Este metodo guarda el atributo curp en mayusculas*/
    protected function curp(): Attribute{
        
        return Attribute::make(
            //get: fn($value)=>strtoupper($value), 
            set: fn($value)=>strtoupper($value),
        );
    }

    /*Guarda con mayusc cada palabra del nombre*/
    protected function nombre(): Attribute{
        
        return Attribute::make(
            set: fn($value)=>ucwords(strtolower($value)),

        );
    }

    /*Mutador para gaurdar la curp en mayusculas*/
    

    


}


