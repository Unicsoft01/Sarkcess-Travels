<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Applications extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationsFactory> */
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'appication_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'university_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'qualification',
        'country',
        'state',
        'budget',
    ];

    /**
     * Get the university that owns the Applications
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function university(): BelongsTo
    {
        return $this->belongsTo(Universities::class, 'university_id');
    }
}