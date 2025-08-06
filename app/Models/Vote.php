<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'miss_id',
        'voter_email',
        'voter_phone',
        'amount',
        'payment_method',
        'transaction_id',
        'status',
    ];

    /**
     * Get the miss that received the vote.
     */
    public function miss()
    {
        return $this->belongsTo(Miss::class);
    }
}