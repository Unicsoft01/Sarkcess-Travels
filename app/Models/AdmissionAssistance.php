<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AdmissionAssistance extends Model
{
    use HasFactory;

    protected $primaryKey = 'ad_id';

    protected $fillable =
    [
        'short_name',
        'fullname',
        'slug',
        'body',
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
    
    public function assistancePost(): BelongsTo
    {
        return $this->belongsTo(Posts::class, 'post_id');
    }
}