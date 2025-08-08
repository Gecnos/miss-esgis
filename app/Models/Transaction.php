<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    //

    public function miss(): BelongsTo
    {
        return $this->belongsTo(Miss::class, 'miss_id');
    }
}
