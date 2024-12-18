<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminUserStoreRequest extends FormRequest
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
            'name' => 'required|max:30',
            'email' => 'required|unique:admin_users|max:30',
            'phone' => 'required|unique:admin_users|max:11',
            'password' => 'required|min:8|max:20'
        ];
    }
}
