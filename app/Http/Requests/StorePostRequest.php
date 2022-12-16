<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        $rules = [
            'Nama Promo' => [
                'required',
                'string',
                'max:100',
            ],
            'Deskripsi Promo' => [
                'required',
                'string',
                'max:250'
            ],
            'Diskon' => [
                'required',
                'digit:2',
            ],'Tombol' => [
                'required',
                'string',
                'max:225',
            ],'Foto' => [
                'required',
                'string',
                'max:225',
            ],
        ];

        return $rules;
    }
}
