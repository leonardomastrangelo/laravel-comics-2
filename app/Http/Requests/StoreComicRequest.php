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
            'thumb' => 'required|url',
            'description' => 'required',
            'price' => 'required|min:5|max:20',
            'type' => 'required',
            'sale_date' => 'required|date_format:Y-m-d',
            'series' => 'required|min:3|max:30',
        ];
    }
    /**
     * Defining cutomized error messages
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Field ":attribute" is required',
            'title.min' => 'Field ":attribute" must have at least :min chars',
            'title.max' => 'Field ":attribute" must have at least :max chars',
            'description.required' => 'Field ":attribute" is required',
            'price.required' => 'Field ":attribute" is required',
            'price.min' => 'Field ":attribute" must have at least :min chars',
            'price.max' => 'Field ":attribute" must have at least :max chars',
            'type.required' => 'Field ":attribute" is required',
            'sale_date.required' => 'Field ":attribute" is required',
            'sale_date.date_format' => 'Field ":attribute" does not match : :format',
            'series.required' => 'Field ":attribute" is required',
            'series.min' => 'Field ":attribute" must have at least :min chars',
            'series.max' => 'Field ":attribute" must have at least :max chars',
        ];
    }
}
