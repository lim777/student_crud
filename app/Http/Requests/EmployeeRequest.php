<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        $rules = [
            'name'      =>'required|min:3|max:20',
            'gender'    =>'required',
            'phone'     =>'required|numeric',
            'village'   =>'required|max:20',
            'commune'   =>'required',
            'district'  =>'required',
            'province'  =>'required',
            'dob'       =>'required|date'
        ];
        return $rules;
    }
}
