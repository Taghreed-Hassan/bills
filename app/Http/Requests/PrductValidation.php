<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Response;


class PrductValidation extends FormRequest
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
            'product_name' => 'required|max:255|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u'

        ];
    }
    public function messages()
{
    return [
        'product_name.required' => 'اسم القسم مطلوب ',
        'product_name.regex' => 'الاسم غير صحيح',
    ];
}
}
