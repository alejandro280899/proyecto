<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}
