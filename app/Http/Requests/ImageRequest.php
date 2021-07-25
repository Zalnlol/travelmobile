<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'image' => 'file|image|required|max: 10240',
            'image_left' => 'file|image|required|max: 10240',
            'image_right' => 'file|image|required|max: 10240',
            'image_behind' => 'file|image|required|required|max: 10240',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Bạn chưa chọn ảnh 1',
            'image_left.required' => 'Bạn chưa chọn ảnh 2',
            'image_right.required' => 'Bạn chưa chọn ảnh 3',
            'image_behind.required' => 'Bạn chưa chọn ảnh 4',
            'image.image' => 'Bạn chỉ được upload file hình',
            'image_left.image' => 'Bạn chỉ được upload file hình',
            'image_right.image' => 'Bạn chỉ được upload file hình',
            'image_behind.image' => 'Bạn chỉ được upload file hình',
            'image.max' => 'File chứa tối đa 10MB',
            'image_left.max' => 'File chứa tối đa 10MB',
            'image_right.max' => 'File chứa tối đa 10MB',
            'image_behind.max' => 'File chứa tối đa 10MB',
        ];
    }
}
