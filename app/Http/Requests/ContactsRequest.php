<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactsRequest extends Request
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
            'nom' => 'required|alpha_num|unique:contacts,nom',
            'prenom' => 'required|string',
            'fonction' => 'alpha_num',
            'tel' => 'string',
            'gsm' => 'string',
            'mail' => 'email',
            'client_id' => 'required|integer'
        ];
    }
}
