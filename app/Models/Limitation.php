<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limitation extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function application(){
        return $this->belongsToMany(Application::class);
    }
}
