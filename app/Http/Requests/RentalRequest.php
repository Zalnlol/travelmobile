<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalRequest extends FormRequest
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
            'plate_id' => 'bail|required|unique:tb_car_rental',
            'brand' => 'bail|required',
            'name' => 'bail|required',
            'consumption' => 'bail|required|numeric|integer|min:5|max:30',
            'rent_price' => 'bail|required|max:15000|numeric|integer|min:400|max:15000',
            'address' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'plate_id.required' => 'Vui lòng nhập biển số.',
            'plate_id.unique' => 'Biển số xe trùng khớp.',
            'brand.required' => 'Bạn chưa nhập hãng xe.',
            'name.required' => 'Bạn chưa nhập mẫu xe.',
            'consumption.required' => 'Vui lòng nhập mức tiêu thụ xe của bạn.',
            'consumption.numeric' => 'Mức tiêu thụ chỉ được nhập số.',
            'consumption.integer' => 'Mức tiêu thụ chỉ được nhập số nguyên',
            'consumption.min' => 'Mức tiêu thụ bé nhất là 5',
            'consumption.max' => 'Mức tiêu thụ bé nhất là 30',
            'rent_price.required' => 'Giá chưa nhập giá thuê xe.',
            'rent_price.numeric' => 'Giá thuê chỉ được nhập số.',
            'rent_price.integer' => 'Mức giá chỉ được nhập số nguyên',
            'rent_price.min' => 'Mức giá thấp nhất là 400.',
            'rent_price.max' => 'Mức giá cao nhất là 15000.',
            'address.required' => 'Bạn cần điền địa chỉ chính xác để giao nhận xe',

        ];
    }
}
