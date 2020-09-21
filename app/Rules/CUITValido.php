<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Log;

class CUITValido implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        Log::debug('Atributo: '.$attribute);
        Log::debug('valor: '.$value);
        $cuil = str_replace('-','',trim($value));
        if (!is_numeric($cuil)) return false;
        if (strlen($cuil) !== 11) return false;

        $factores = array(5,4,3,2,7,6,5,4,3,2);
        $sumatoria = 0;
        for ($i=0; $i < strlen($cuil)-1; $i++) {
        $sumatoria += (substr($cuil, $i, 1))*$factores[$i];
        }
        $resto = $sumatoria % 11;
        $digitoVerificador = ($resto != 0) ? (11 - $resto) : $resto;

        Log::debug('Digito verificador: '.$digitoVerificador);

        return ($digitoVerificador == substr($cuil, strlen($cuil)-1));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        Log::debug('Entro a mostrar mensaje de error');
        return 'El cuit que proporcionó no es válido';
    }

}
