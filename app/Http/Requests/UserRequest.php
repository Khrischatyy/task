<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'form_section__item_input' => 'required|max:20',
            'form_section__item_textarea' => 'required|min:10|max:150'
        ];
    }
    public function messages() {
        return [
            'form_section__item_input.required' => 'Поле имя является обязательным',
            'form_section__item_input.max' => 'Имя должно быть не более 20 символов',
            'form_section__item_textarea.min' => 'Текст должен быть не менее 10 символов',
            'form_section__item_textarea.max' => 'Текст должен быть не более 150 символов'
        ];
    }
}
