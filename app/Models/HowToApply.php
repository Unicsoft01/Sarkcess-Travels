<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HowToApply extends Model
{
    use HasFactory;

    protected $primaryKey = 'app_id';

    protected $fillable =
    [
        'step1',
        'description1',
        'step2',
        'description2',
        'step3',
        'description3',
        'status',
    ];

    protected $casts = [
        'deadline' => 'date',
        // 'priority' => PriorityType::class,
        // 'status' => StatusType::class,
    ];
    
    public function section(): BelongsTo
    {
        return $this->belongsTo(SectionTexts::class, 'section_id');
    }
}