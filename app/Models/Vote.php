<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'miss_id',
        'moyen_paiement',
        'montant',
        'numero_telephone',
        'email',
        'ip_adresse'
    ];

    protected $casts = [
        'timestamp' => 'datetime',
        'montant' => 'decimal:2'
    ];

    public function miss(): BelongsTo
    {
        return $this->belongsTo(Miss::class, 'miss_id');
    }
}
