<?php

namespace Modules\Link\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
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
        if ($this->has('id')) {
            return [
                'title' => 'required',
                'link' => 'required',
                'type' => 'required'
            ];
        }
        return [
            'title' => 'required',
            'link' => 'required',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Chưa nhập tiêu đề liên kết ',
            'link.required' => 'Chưa nhập liên kết link ',
            'type.required' => 'Chưa chọn kiểu liên kết',
        ];
    }
}
