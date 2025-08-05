<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Miss extends Authenticatable
{
    use HasFactory;

    protected $table = 'misses';

    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'pays',
        'email',
        'telephone',
        'bio',
        'photo_principale',
        'mot_de_passe',
        'statut'
    ];

    protected $hidden = [
        'mot_de_passe',
    ];

    protected $casts = [
        'date_inscription' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class, 'miss_id');
    }

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class, 'miss_id');
    }

    public function getVoteCountAttribute()
    {
        return $this->votes()->count();
    }

    public function getFullNameAttribute()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo_principale 
            ? asset('storage/' . $this->photo_principale)
            : asset('images/placeholder-avatar.jpg');
    }

    public function scopeActive($query)
    {
        return $query->where('statut', 'active');
    }
}
