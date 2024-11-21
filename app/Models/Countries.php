<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Countries extends Model
{
    /** @use HasFactory<\Database\Factories\CountriesFactory> */
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'country_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country',
        'thumbnail',
        'short_note',
        'slug',
    ];

    /**
     * Get all of the universities for the Countries
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function universities(): HasMany
    {
        return $this->hasMany(Universities::class, 'university_id', 'country_id');
    }
}