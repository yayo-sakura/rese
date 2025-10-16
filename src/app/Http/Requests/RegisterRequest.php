<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>['required' , 'string' , 'max:191'],
            'email'=>['required' , 'email' , 'unique:users' , 'string' , 'max:191'],
            'password'=>['required' , 'min:8' , 'max:191']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'ユーザーネームを入力してください',
            'name.string' => 'ユーザーネームは文字列で入力してください',
            'name.max' => 'ユーザーネームは191文字以内で入力してください',

            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '有効なメールアドレス形式で入力してください',
            'email.unique' => 'このメールアドレスは既に登録されています',
            'email.max' => 'メールアドレスは191文字以内で入力してください',

            'password.required' => 'パスワードを入力してください',
            'password.min' => 'パスワードは8文字以上で入力してください',
            'password.max' => 'パスワードは191文字以内で入力してください',
        ];
    }
}
