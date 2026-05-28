<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
    public function rules() {

    return [
        'title' => 'required|max:20',

        'description' => 'required|max:50',

        'image' =>
        'required|image|mimes:jpg,jpeg,png,webp',
    ];
    }

    public function messages()
    {
        return [
            'title.required' => 'タイトルを入力してください',
              'title.max' =>
        'タイトルは20文字以内です',
            'description.required' => '説明を入力してください',
              'description.max' =>
        '説明は50文字以内です',
            'image.required' => '画像を選択してください',
        ];
    }
}
