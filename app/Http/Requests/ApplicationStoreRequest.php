<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationStoreRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|min:50|max:2000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Имя» является обязательным.',
            'name.string' => 'Поле «Имя» должно быть строкой.',
            'name.max' => 'Поле «Имя» должно быть не больше, чем 255 символов.',
            'email.required' => 'Поле «Почта» является обязательным.',
            'email.email' => 'Поле «Почта» заполнено в некорректном для электронной почты формате.',
            'email.max' => 'Поле «Почта» должно быть не больше, чем 255 символов.',
            'content.required' => 'Текст вашего запроса является обязательным.',
            'content.string' => 'Текст вашего запроса должен быть строкой.',
            'content.min' => 'Текст вашего запроса не должен быть меньше, чем 50 символов.',
            'content.max' => 'Текст вашего запроса не должен быть больше, чем 2000 символов.',
        ];
    }
}
