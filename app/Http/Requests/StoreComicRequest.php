<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // deve essere true 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:100',
            'description' => 'required',
            'price' => 'required|min:5|max:20',
            'sale_date' => 'required|date_format:Y-m-d',
            'series' => 'required|min:3|max:30',
            'type' => 'required|min:3|max:30',
        ];
    }
    /**
     * Defining cutomized error messages
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il campo title è obbligatorio',
            'title.min' => 'Il campo title deve avere :min caratteri',
            'title.max' => 'Il campo title deve avere :max caratteri',
            'description.required' => 'Il campo description è obbligatorio',
            'price.required' => 'Il campo price è obbligatorio',
            'price.min' => 'Il campo price deve avere :min caratteri',
            'price.max' => 'Il campo price deve avere :max caratteri',
            'sale_date.required' => 'Il campo price è obbligatorio',
            'sale_date.date_format' => 'Il campo sale_date non segue la formattazione :date_format',

            // continua
        ];
    }
}
