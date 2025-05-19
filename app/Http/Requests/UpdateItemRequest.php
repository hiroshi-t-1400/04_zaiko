<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name_ja' => 'required|string|max:100',
            'name_en' => 'string|max:100',
            'quantity' => 'required|numeric|min:0',
            'unit_of_measure' => 'required|string|max:10',
            'category_id' => 'nullable|integer|max_digits:5',
            // 'price' => 'nullable|numeric|max_digits:10|min:0',
            'price' => 'nullable|numeric|min:0|regex:/\A\d{1,8}(\.\d{1,2})?\z/',
            'buy_date' => 'nullable|date',
            'reorder_point' => 'nullable|numeric|min:0',
            'safety_stock' => 'nullable|numeric|min:0',
            'description_ja' => 'string|max:500',
            'img_path' => 'nullable|string|max:255|url',
            'like_count' => 'nullable|integer|between:0,10',
        ];
    }

    /**
     * 入力フォームのバリデーションエラーメッセージ
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'price.regex' => ':attributeは整数８桁、小数点以下２桁の数字を入力してください。',
        ];
    }

    public function attributes(): array
    {
        return [
            'price' => '価格'
        ];
    }
}
