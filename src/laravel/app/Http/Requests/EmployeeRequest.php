<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;

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
        return [
            'employee_code' => 'required|max:10',
            'employee_name' => 'required|max:100',
            'department_id' => 'required',
            'gender_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attributeは必須です',
            'max' => ':attributeは:max文字以内にしてください',
        ];
    }

    public function attributes()
    {
        $employeeColumn = Config::get('define.employeeColumn');

        return [
            'employee_code' => $employeeColumn['employee_code'],
            'employee_name' => $employeeColumn['employee_name'],
            'department_id' => $employeeColumn['department_id'],
            'gender_id' => $employeeColumn['gender_id'],
        ];
    }
}
