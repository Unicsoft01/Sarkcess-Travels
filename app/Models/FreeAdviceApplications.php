<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeAdviceApplications extends Model
{
    /** @use HasFactory<\Database\Factories\FreeAdviceApplicationsFactory> */
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'application_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'qualification',
        'email',
        'purpose',
        'country',
        // 'zip',
        'phone',
        'message',
    ];

    
}