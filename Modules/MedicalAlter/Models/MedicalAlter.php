<?php

namespace Modules\MedicalAlter\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalAlter extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medicalalters';

    protected $fillable = ['name', 'slug', 'type', 'intro', 'benefits', 'description', 'meta_title', 'meta_description', 'meta_keywords', 'image', 'status'];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return \Modules\MedicalAlter\database\factories\MedicalAlterFactory::new();
    }
}