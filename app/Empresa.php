<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    // Especificamos que campos no estan permitidos para el modelo
    // array vacío significa que no protegemos ningún campo
    protected $guarded = [];

    public function scopeConCertificado($query)
    {
        return $query->where('certificado', 1);
    }
}
