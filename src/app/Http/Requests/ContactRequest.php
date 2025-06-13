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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
            return [
                'last_name' => ['required'],
                'first_name' => ['required'],
                'gender' => ['required'],
                'email' => ['required', 'email'],
                'tel1' => ['required', 'digits_between:1,5', 'numeric'],
                'tel2' => ['required', 'digits_between:1,5', 'numeric'],
                'tel3' => ['required', 'digits_between:1,5', 'numeric'],
                'address' => ['required'],
                'category_id' => ['required'],
                'content' => ['required', 'max:120'],   
        ];
    }
}
