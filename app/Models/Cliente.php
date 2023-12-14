<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'telefono', 'correo'];
    
    // tener en cuenta que usar este metodo siempre y cuando no se utilice el metodo 
    // Cliente::create($request->all());
    
    protected $guarded=[];

}
