<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            // Validaciones desde el backend
            'name'      => 'required|string|max:200',
            'email'     => 'required|email|confirmed|unique:users,email',
            'password'  => 'required|min:4|confirmed'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name'      => 'nombre',
            'email'     => 'corre electronico',
            'password'  => 'contraseña',
            'email.confirmed' => 'correo electronico',
            'password.confirmed' => 'contraseña'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    // Mensajes traducidos para no exponer la base de datos
    public function messages(): array
    {
        return [
            'name.required'       => 'El :attribute es requerido',
            'email.required'      => 'El :attribute es requerido',
            'password.required'   => 'La :attribute es requerida',
            'email.confirmed'     => 'El :attribute debe ser confirmado',
            'password.confirmed'   => 'La :attribute debe ser confirmada'  
        ];
    }

    
}
