<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AboutUniversities extends Model
{
    /** @use HasFactory<\Database\Factories\AboutUniversitiesFactory> */
    use HasFactory;
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'post_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post',
    ];
    
    public function university(): BelongsTo
    {
        return $this->belongsTo(Universities::class, 'post_id');
    }
}