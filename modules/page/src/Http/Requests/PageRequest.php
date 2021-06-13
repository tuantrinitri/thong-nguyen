<?php

namespace Modules\Page\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
                'slug' => 'required',
                'content' => 'required'
            ];
        }
        return [
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Chưa nhập tiêu đề',
            'slug.required' => 'Chưa nhập liên kết tĩnh',
            'content.required' => 'Chưa nhập nội dung chi tiết'
        ];
    }
}
