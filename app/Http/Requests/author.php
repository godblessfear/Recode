<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class author extends FormRequest
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
        ];
    }
    
    public function messages() {
        return [
            "name.required" => "НЕ заполнено поле имя автора",
            "name.max" => "Превышен объём символов поля название имя автора (не более 100)",
            
        ];
    }
}
