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
        // return false;
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
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'email'=>['required','email'],
            'tel1'=>['required', 'max:4'],
            'tel2'=>['required', 'max:4'],
            'tel3'=>['required', 'max:4'],
            'address'=>'required',
            'category_id'=>'required',
            'detail'=>['required', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'=>'姓を入力してください。',
            'last_name.required'=>'名を入力してください。',
            'gender.required'=>'性別を選択してください。',
            'email.required'=>'メールアドレスを入力してください。',
            'email.email'=>'メールアドレスはメール形式で入力してください。',
            'tel1.required'=>'電話番号を入力してください。',
            'tel2.required'=>'電話番号を入力してください。',
            'tel3.required'=>'電話番号を入力してください。',
            'address.required'=>'住所を入力してください。',
            'category_id.required'=>'お問い合わせの種類を選択してください。',
            'detail.required'=>'お問い合わせ内容を入力してください。',
            'tel1.max'=>'電話番号は4桁までの数字で入力してください。',
            'tel2.max'=>'電話番号は4桁までの数字で入力してください。',
            'tel3.max'=>'電話番号は4桁までの数字で入力してください。',
            'detail.max'=>'お問合せ内容は120文字以内で入力してください。',
        ];
    }
}
