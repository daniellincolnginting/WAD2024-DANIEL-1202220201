<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'kode_dosen' => 'required|string|size:3|unique:dosens,kode_dosen,' . $this->id,
            'nama_dosen' => 'required|string',
            'nip' => 'required|string|unique:dosens,nip,' . $this->id,
            'email' => 'required|email|unique:dosens,email,' . $this->id,
            'no_telepon' => 'nullable|string',
        ];
    }
}
