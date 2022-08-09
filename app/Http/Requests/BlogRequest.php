<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'title'        => 'required',
            'slug'         => 'required|unique:blogs',
            'body'         => 'required',
           
            'category_id'  => 'required',
            'image'        => 'mimes:jpg,jpeg,bmp,png',
        ];

        //'published_at' => 'date_format:Y-m-d H:i:s',

         switch($this->method()) {
            case 'PUT':
            case 'PATCH':
                $rules['slug'] = 'required|unique:blogs,slug,' . $this->route('admin.blog');
                break;
        }

        return $rules;
    }
}
