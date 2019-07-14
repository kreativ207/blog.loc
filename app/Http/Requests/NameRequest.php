<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NameRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => "Не забывайте ввести Имя",
            'last_name.required' => "Не забывайте ввести Фамилию",
            'last_name.min' => "Фамилия не меньше :min символов",
        ];
    }
}
