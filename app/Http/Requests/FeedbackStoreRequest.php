<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'in:1,2,3,4',
            'message' => 'required|max:2000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Введите своё имя',
            'name.max' => 'Ваше имя слишком длинное',

            'email.required' => 'Введите вашу почту',
            'email.email' => 'Некорректная почта',
            'email.max' => 'Ваша почта слишком длинная',

            'subject.in' => 'Выберите тему сообщения',

            'message.required' => 'Введите сообщение, по причине чего вы мне хотите со мной связаться',
            'message.max' => 'Сообщение слишком длинное. Подсказка: если вы хотите прислать длинный текст (например, ТЗ), то загружайте текст на Google-диск и пишите в тексте ссылку на документ'
        ];
    }
}
