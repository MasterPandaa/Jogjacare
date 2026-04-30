<?php

namespace Modules\MedicalCost\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalCost extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'medicalcosts';

    protected $fillable = [
        'name',
        'lowest_price',
        'highest_price',
        'status',
    ];

    protected $casts = [
        'lowest_price' => 'decimal:2',
        'highest_price' => 'decimal:2',
    ];

    protected static function newFactory()
    {
        return \Modules\MedicalCost\database\factories\MedicalCostFactory::new();
    }

    public function getFormattedLowestPriceAttribute()
    {
        return 'Rp ' . number_format($this->lowest_price, 0, ',', '.');
    }

    public function getFormattedHighestPriceAttribute()
    {
        return 'Rp ' . number_format($this->highest_price, 0, ',', '.');
    }
}