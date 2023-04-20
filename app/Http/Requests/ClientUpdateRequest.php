<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

       'name'=> 'required',
       'host_country_id' => 'required',
       'staff_code' => 'required',
       'organization' => 'required',
       'r_number' => 'required',
       'index_number' => 'required', 
       'email'=> 'required'
        ];
    }
}
