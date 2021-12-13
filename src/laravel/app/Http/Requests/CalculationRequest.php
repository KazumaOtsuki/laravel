<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
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
            'num1' => 'required|numeric',
            'num2' => 'required|numeric',
            'sign' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attributeは必須です',
            'numeric' => ':attributeは数字を入力してください',
            //'num1.required' => ':attributeは必須です',
            //'num1.numeric' => ':attributeは数字を入力してください',
            //'num2.required' => ':attributeは必須です',
            //'num2.numeric' => ':attributeは数字を入力してください',
        ];
    }

    public function attributes()
    {
        return [
            'num1' => '数字1',
            'num2' => '数字2',
            'sign' => '符号'
        ];
    }
}
