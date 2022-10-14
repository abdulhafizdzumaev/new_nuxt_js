<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required|description',
            'price' =>'required',
            // 'image' =>'required'
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'Поле имя является обязательным',
        'description.required' => 'Поле description является обязательным',
        'price.required' => 'Поле price является обязательным',
        // 'image.required' => 'Поле image является обязательным',

        ];
    }
}
