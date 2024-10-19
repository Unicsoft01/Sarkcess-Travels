<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Posts extends Model
{
    use HasFactory;

    protected $primaryKey = 'post_id';

    protected $fillable = [
        'post',
        'status',
    ];

    public function appGuidePost(): HasOne
    {
        return $this->hasOne(AdmissionAssistance::class, 'post_id');
    }
}