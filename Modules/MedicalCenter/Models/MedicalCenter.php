<?php

namespace Modules\MedicalCenter\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalCenter extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medicalcenters';

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
        'meta_keywords',
        'status'
    ];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\MedicalCenter\database\factories\MedicalCenterFactory::new();
    }
}