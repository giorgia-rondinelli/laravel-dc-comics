<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:3|max:150',
            'description'=>'required|min:3|max:500',
            'thumb'=>'required|min:3|max:300',
            'price'=>'required|min:3|max:8',
            'series'=>'required|min:3|max:150',
            'sale_date'=>'required|date',
            'type'=>'required|min:3|max:255',
            'artists'=>'required|min:3|max:255',
            'writers'=>'required|min:3|max:255',


        ];
    }
    public function messages() {
        return[
            'title.required'=>'il titolo è un campo obbligatorio',
            'title.min'=> 'il titolo deve contenere almeno :min caratteri ',
            'title.max'=> 'il titolo può contenere massimo :max caratteri ',

            'description.required'=>'la descrizione è un campo obbligatorio',
            'description.min'=> 'la descrizione deve contenere almeno :min caratteri ',
            'description.max'=> 'la descrizione può contenere massimo :max caratteri ',

            'thumb.required'=>'l immagine è un campo obbligatorio',
            'thumb.min'=> 'l immagine deve contenere almeno :min caratteri ',
            'thumb.max'=> 'l immagine  può contenere massimo :max caratteri ',

            'price.required'=>'il prezzo è un campo obbligatorio',
            'price.min'=> 'il prezzo deve contenere almeno :min caratteri ',
            'price.max'=> 'il prezzo  può contenere massimo :max caratteri ',

            'series.required'=>'la serie è un campo obbligatorio',
            'series.min'=> 'la serie deve contenere almeno :min caratteri ',
            'series.max'=> 'la serie può contenere massimo :max caratteri ',

            'sale_date.date'=>'la data deve essere inserita in formato yyyy-mm-dd',

            'type.required'=>'il tipo è un campo obbligatorio',
            'type.min'=> 'il tipo deve contenere almeno :min caratteri ',
            'type.max'=> 'il tipo può contenere massimo :max caratteri ',

            'artists.required'=>'gli artisti sono un campo obbligatorio',
            'artists.min'=> 'gli artisti devono contenere almeno :min caratteri ',
            'artists.max'=> 'gli artisti possono contenere massimo :max caratteri ',

            'writers.required'=>'gli scrittori sono un campo obbligatorio',
            'writers.min'=> 'gli scrittori devono contenere almeno :min caratteri ',
            'writers.max'=> 'gli scrittori possono contenere massimo :max caratteri ',


        ];

    }
}
