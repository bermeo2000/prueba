<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    use HasFactory;
    protected $table= 'jugador';
    public $timestamps =false;
     public $fillable = 
     [
     'nombre',
     'apellido',
     'cedula',
     'n_camiseta',
     'posicion',
     ];

     public function equipos(){
        return $this->belongsTo(l_equipos::class);
     }

}
