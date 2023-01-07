<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
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
            //validasi laravel panjang angka minimal 10 panjangnya 10
            'NIM' => 'required|numeric|digits:10|unique:students,NIM',
            'name' => 'required|string',
            'score' => 'required',
        ];
    }
}
