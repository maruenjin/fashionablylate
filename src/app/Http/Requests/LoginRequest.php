<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function messages():array
    {
        return[
         'email.required' => 'メールアドレスを入力してください',
         'email.email' => 'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
         'password.required' => 'パスワードを入力してください',  
        ];
    }
    
protected function failedValidation(Validator $validator)
{
    throw new HttpResponseException(
        redirect()
            ->back()
            ->withErrors($validator)
            ->withInput()
    );
}
}
