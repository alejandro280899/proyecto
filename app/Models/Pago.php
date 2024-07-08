<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'concepto',
        'cantidad',
        'fecha_pago',
        'tipo_pago_id'
    ];

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class);
    }

    public function tipoPago()
    {
        return $this->belongsTo(TipoPago::class);
    }
}
