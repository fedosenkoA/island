<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    /**
     *
     * @var string
     */
    protected $table = 'items';

    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function belongings(): HasMany
    {
        return $this->hasMany(Belongings::class);
    }
}
