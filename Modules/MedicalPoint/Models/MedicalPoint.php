<?php

namespace Modules\MedicalPoint\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalPoint extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medicalpoints';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'intro',
        'description',
        'type',
        'district',
        'sub_district',
        'address',
        'maps',
        'contact',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'type' => 'string',
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\MedicalPoint\database\factories\MedicalPointFactory::new();
    }
}