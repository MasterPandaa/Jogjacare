<?php

namespace Modules\MedicalCare\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalCareRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:medicalcares,slug,'.$this->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:Primary Health care,Secondary Health care,Tertiary Health care',
            'intro' => 'nullable',
            'description' => 'nullable',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'meta_keywords' => 'nullable|max:255',
            'status' => 'required|integer',
        ];
    }
}