<?php

namespace Intensivettt\Http\Requests;

use Intensivettt\Http\Requests\Request;

class MedidaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'nombre_medida' => 'min:2|max:40|required'
        ];
    }
}
