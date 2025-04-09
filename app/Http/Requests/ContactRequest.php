<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
//    public function authorize(): bool
//    {
//        return true;
//    }


    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'status' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'zip' => 'required|min:5',
            'moving' => 'required|min:5',
            'message' => 'required|min:3',
        ];
    }
}
