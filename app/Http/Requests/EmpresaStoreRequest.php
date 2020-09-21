<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CUITValido;
use Illuminate\Support\Facades\Log;

class EmpresaStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        Log::debug('El usuario esta autorizado');
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'nombreFantasia' => 'required',
                'razon_social' => 'required',
                'cuit' => new CUITValido
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombreFantasia.required' => 'Por favor, indicá un Nombre de Fantasía!',
            'razon_social.required' => 'No te olvides de indicar la Razón Social!',
            'cuit.required' => 'Necesitamos saber tu CUIT!'
        ];
    }
}
