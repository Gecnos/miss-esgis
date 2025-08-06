<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'miss_id',
        'moyen_paiement',
        'montant',
        'timestamp',
        'numero_telephone',
        'email',
        'ip_adresse',
    ];
    public $timestamps = false;

    /**
     * Get the miss that received the vote.
     */
    public function miss()
    {
        return $this->belongsTo(Miss::class, 'miss_id');
    }
}
