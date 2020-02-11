<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCommentRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|email',
            'id' => 'required',
            'comment' => 'required|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'وارد کردن نام الزامیست',
            'email.required' => 'وارد کردن ایمیل الزامیست',
            'comment.required' => 'وارد کردن متن کامنت الزامیست',
        ];
    }
}
