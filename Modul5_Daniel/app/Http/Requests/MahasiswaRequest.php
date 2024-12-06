<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Pastikan ini mengembalikan true agar request bisa digunakan
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $id = $this->route('id'); // Ambil ID dari route, jika ada

        return [
            'nim' => "required|string|unique:mahasiswas,nim,{$id}", // Unik tapi abaikan ID ini saat edit
            'nama_mahasiswa' => 'required|string',
            'email' => "required|email|unique:mahasiswas,email,{$id}", // Sama seperti di atas
            'jurusan' => 'required|string',
            'dosen_id' => 'required|exists:dosens,id', // Pastikan dosen_id ada di tabel dosens
        ];
    }
    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi.',
            'nim.unique' => 'NIM sudah digunakan.',
            'nama_mahasiswa.required' => 'Nama mahasiswa wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'jurusan.required' => 'Jurusan wajib diisi.',
            'dosen_id.required' => 'Dosen wajib dipilih.',
            'dosen_id.exists' => 'Dosen tidak valid.',
        ];
    }
    
}
