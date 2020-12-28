<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionValidation extends FormRequest
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
            'section_name' => 'required|unique:sections|max:255|regex:/^[A-Za-z0-9-أ-ي-pL\s\-]+$/u'
        ];
    }


    public function messages()
    {
        return [
            'section_name.required' => 'يرجي ادخال اسم القسم',
            'section_name.unique' => 'اسم القسم مسجل مسبقا',
            'section_name.regex' => 'الاسم غير صحيح',
            'description.required' => 'يرجي ادخال الملاحظات ',
        ];
    }
}
