<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
