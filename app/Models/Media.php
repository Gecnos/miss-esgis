<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Media extends Model
{
    use HasFactory;

    protected $table = 'medias';

    protected $fillable = [
        'miss_id',
        'url',
        'type',
        'date_upload',
    ];

    public $timestamps = false;


    public function miss()
    {
        return $this->belongsTo(Miss::class, 'miss_id');
    }

    public function getUrlAttribute($value)
    {
        if (str_starts_with($value, 'http')) {
            return $value;
        }

        // Si le chemin contient déjà "/storage", on le renvoie tel quel
        if (str_starts_with($value, '/storage')) {
            return $value;
        }

        return Storage::url($value);
    }


}
