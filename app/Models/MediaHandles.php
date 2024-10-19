<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaHandles extends Model
{
    /** @use HasFactory<\Database\Factories\MediaHandlesFactory> */
    use HasFactory;

    protected $fillable = [
        'twitter',
        'facebook',
        'gmail',
        'youtube',
        'insta',
    ];
}