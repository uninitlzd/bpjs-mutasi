<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SatkerStore extends FormRequest
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
            'departemen_satker_id' => 'required',
            'nama' => 'required',
            'status_satker_id' => 'required',
            'kode' => 'required|unique:satker,kode',
        ];
    }
}
