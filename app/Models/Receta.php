<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    //Campos a insertar
    protected $fillable = [
        'titulo',
        'preparacion',
        'ingredientes',
        'imagen',
        'categoria_id'
    ];


    //Obtiene el nombre de la categoria via fk
    public function categoria()
    {
        return $this->belongsTo(CategoriaReceta::class);
    }
    // use HasFactory;
}
