<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'releaseDate' => 'required|date',
            'cast' => 'required|string',
            'genres' => 'required|string',
            'image' => 'required|url',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul ini harus diisi.',
            'description.required' => 'Deskripsi ini harus diisi.',
            'releaseDate.required' => 'Tanggal rilis ini harus diisi.',
            'cast.required' => 'Pemeran ini harus diisi.',
            'genres.required' => 'Genre ini harus diisi.',
            'image.required' => 'URL gambar ini harus diisi.',
            'image.url' => 'Gambar ini harus berupa URL yang valid.',
            'title.max' => 'Judul tidak boleh lebih dari 255 karakter.',
            'description.string' => 'Deskripsi harus berupa teks.',
            'releaseDate.date' => 'Tanggal rilis harus berupa tanggal yang valid.',
            'cast.string' => 'Pemeran harus berupa teks.',
            'genres.string' => 'Genre harus berupa teks.',
        ];
    }
}
