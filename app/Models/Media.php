<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'miss_id',
        'type',
        'url'
    ];

    protected $casts = [
        'date_upload' => 'datetime'
    ];

    public function miss(): BelongsTo
    {
        return $this->belongsTo(Miss::class, 'miss_id');
    }

    public function getUrlAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
