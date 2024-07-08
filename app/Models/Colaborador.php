<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class,'colaborador_proyecto');
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
