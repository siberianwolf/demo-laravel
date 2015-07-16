<?php

namespace App\Http\Requests;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return auth()->user()->hshRole('admin');
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
            'category_id' => 'required|numeric|min:1',
            'author_id' => 'numeric|min:1',
            'name' => 'required',
            'description' => 'required',
            'content' => '',
        ];
    }
}
