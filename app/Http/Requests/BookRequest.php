<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'id_writer' => 'required|integer|exists:writers,id',
            'title' => 'required|max:255',
            'genre' => 'required|max:255',
            'picture' => 'required|image',
            'pages' => 'required|integer',
            'publish_date' => 'required|date'
        ];
    }
}
