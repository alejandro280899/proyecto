<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    
    protected $fillable = ['codigo','descripcion','cuantia','fecha_inicio','fecha_fin'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class,);
    }

    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class,'colaborador_proyecto');
    }
}
