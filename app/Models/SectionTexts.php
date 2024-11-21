<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SectionTexts extends Model
{
    use HasFactory;

    protected $primaryKey = 'section_id';

    protected $fillable = [
        'section_title',
        'section_sub_title',
        'slug',
        'description',
    ];

    public function howToApply(): HasMany
    {
        return $this->hasMany(HowToApply::class, 'section_id'); //always override the default foreign key as the second argument.
    }
    
    public function admissionAssistance(): HasMany
    {
        return $this->hasMany(AdmissionAssistance::class, 'section_id'); //always override the default foreign key as the second argument.
    }
}