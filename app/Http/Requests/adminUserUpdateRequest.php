<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class adminUserUpdateRequest extends FormRequest
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
        $id = $this->route('admin_user');
        
        return [
            'name' => "required|max:30",
            'email' => ['required','max:30', Rule::unique('admin_users','email')->ignore($id)],
            'phone' => ['required','max:11', Rule::unique('admin_users','phone')->ignore($id)]
        ];
    }
}
