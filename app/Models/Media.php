<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';

    use HasFactory;

    protected $fillable = [
        'miss_id',
        'file_url',
        'type',
        'description',
    ];

    /**
     * Get the miss that owns the media.
     */
    public function miss()
    {
        return $this->belongsTo(Miss::class);
    }
}