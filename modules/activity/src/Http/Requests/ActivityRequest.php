<?php

namespace Modules\Activity\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
                'description' => 'required',
                'locale' => 'required',

            ];
        }
        return [
            'title' => 'required',
            'link' => 'required',
            'description' => 'required',
            'locale' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Chưa nhập tiêu đề',
            'link.required' => 'Chưa nhập liên kết tĩnh',
            'description.required' => 'Chưa nhập nội dung chi tiết',
            'locale.required' => 'Chưa chọn ngôn ngữ'
        ];
    }
}
