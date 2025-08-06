<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miss extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'city',
        'country',
        'phone',
        'email',
        'main_photo_url',
        'short_presentation',
        'status',
        'total_votes',
    ];

    /**
     * Get the medias for the miss.
     */
    public function medias()
    {
        return $this->hasMany(Media::class);
    }

    /**
     * Get the votes for the miss.
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    // Accessor for full name
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}