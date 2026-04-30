<?php

namespace Modules\MedicalPoint\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalPointRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:medicalpoints,slug,'.$this->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'intro' => 'required',
            'description' => 'required',
            'type' => 'required|in:Clinic,Public health center,Pharmacy',
            'district' => 'required|in:Bantul,Gunungkidul,Kulon Progo,Sleman,Kota Yogyakarta',
            'sub_district' => 'required',
            'address' => 'required',
            'maps' => 'nullable|url',
            'contact' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable|max:255',
        ];
    }
}