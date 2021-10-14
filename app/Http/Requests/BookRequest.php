<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
                'name' => 'required|max:100',
                'date' => 'required|date'
        ];
    }

    public function messages() {
        return [
            "name.required" => "НЕ заполнено поле название книги",
            "date.required" => "НЕ заполнено поле Датa книги",
            "name.max" => "Превышен объём символов поля название книги (не более 100)",
            
        ];
    }
}
