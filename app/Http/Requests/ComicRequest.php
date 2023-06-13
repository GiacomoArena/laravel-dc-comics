<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
        return [
            'title'=> 'required|min:5|max:100',
            'description'=> 'min:5',
            'thumb'=> 'required',
            'price'=> 'required|max:10',
            'series'=> 'max:100',
            'sale_date'=> 'max:10',
            'type'=> 'max:30',
            'artists'=> 'max:255',
            'writers'=> 'max:255'
        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo non deve avere più di :max caratteri',
            'description.min' => ' description deve avere almeno :min caratteri',
            'thumb.required' => 'Il thumb è un campo obbligatorio',
            'price.required' => 'Il price è un campo obbligatorio',
            'price.max' => 'Il price non deve avere più di :max caratteri',
            'series.max' => 'series non deve avere più di :max caratteri',
            'sale_date.max' => 'sale_date non deve avere più di :max caratteri',
            'type.max' => 'Il type non deve avere più di :max caratteri',
            'artists.max' => 'artists non deve avere più di :max caratteri',
            'writers.max' => 'writers non deve avere più di :max caratteri',
        ];
    }
}
