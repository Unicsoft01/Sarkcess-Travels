<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Universities extends Model
{
    /** @use HasFactory<\Database\Factories\UniversitiesFactory> */
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'university_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'thumbnail',
        'university',
        'slug',
        'country_id',
        'post_id',
    ];

    public function countryLocated(): BelongsTo
    {
        return $this->belongsTo(Countries::class, 'country_id');
    }
    public function aboutUniversity(): BelongsTo
    {
        return $this->belongsTo(AboutUniversities::class, 'post_id');
    }

    /**
     * Get all of the applications for the Universities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications (): HasMany
    {
        return $this->hasMany(Applications::class, 'application_id');
    }
}