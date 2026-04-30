<?php

namespace Modules\MedicalCenter\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalCenterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:medicalcenters,slug,' . $this->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'intro' => 'required|string',
            'description' => 'nullable|string',
            'type' => 'required|string|max:255',
            'district' => 'required|in:Bantul,Gunungkidul,Kulon Progo,Sleman,Kota Yogyakarta',
            'sub_district' => 'required|string',
            'address' => 'required|string',
            'maps' => 'nullable|url',
            'contact' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'status' => 'required|in:1,0,2',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama pusat medis wajib diisi.',
            'slug.unique' => 'Slug sudah digunakan, silakan pilih yang lain.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar yang diizinkan: jpeg, png, jpg, gif.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'type.required' => 'Jenis pusat medis wajib diisi.',
            'maps.url' => 'URL peta harus valid.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->slug) {
            $this->merge([
                'slug' => \Illuminate\Support\Str::slug($this->slug),
            ]);
        }
    }
}