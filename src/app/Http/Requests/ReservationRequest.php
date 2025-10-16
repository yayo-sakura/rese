<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
        $routeShopId = $this->route('shop_id');
        
        return [
            'date'=>['required' , 'date_format:Y-m-d' , 'after_or_equal:today'],
            'time'=>['required' , 'date_format:H:i'],
            'number_of_people'=>['required' , 'integer' , 'min:1'],
            'shop_id'=>['required' , 'exists:shops,id', 'in:' . $routeShopId]
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '予約日を選択してください',
            'date.date_format' => '予約日の形式が正しくありません（例: 2025-01-01）',
            'date.after_or_equal' => '予約日は今日以降の日付を選択してください',

            'time.required' => '予約時間を選択してください',
            'time.date_format' => '予約時間の形式が正しくありません（例: 19:00）',

            'number_of_people.required' => '予約人数を選択してください',
            'number_of_people.integer' => '予約人数は整数で入力してください',
            'number_of_people.min' => '予約人数は1名以上で入力してください',

            'shop_id.required' => '店舗情報が正しく取得できませんでした',
            'shop_id.exists' => '指定された店舗は存在しません',

            'shop_id.in' => '店舗情報に不整合があります',
        ];
    }
}
