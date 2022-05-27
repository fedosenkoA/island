<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lot extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function belongings(): BelongsTo
    {
        return $this->belongsTo(Belongings::class);
    }

    /**
     * @return BelongsTo
     */
    public function bets(): BelongsTo
    {
        return $this->belongsTo(Bet::class);
    }
}
