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
            'plate_id' => 'required|unique:tb_car_rental',
            'brand' => 'required',
            'name' => 'required',
            'consumption' => 'required',
            'rent_price' => 'required',
            'address' => 'required',
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
            'rent_price.required' => 'Bạn chưa nhập giá thuê xe',
            'address.required' => 'Bạn cần điền địa chỉ chính xác để giao nhận xe',

        ];
    }
}
