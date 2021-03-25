<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StroreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //PARA LOS PERMISOS QUE TENDRÁ O NO TENDRÁ PERMISOS
        // HACES LA CONSULTA Y SI TE DEVUELVE TRUE, TENDRÁ PERMISO O FALSE SI NO
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
