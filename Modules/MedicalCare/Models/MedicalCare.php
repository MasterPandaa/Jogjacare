<?php

namespace Modules\MedicalCare\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalCare extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medicalcares';

    protected $fillable = [
        'name',
        'slug',
        'image',
        'type',
        'intro',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
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
        return \Modules\MedicalCare\database\factories\MedicalCareFactory::new();
    }
}