<?php

namespace App\Models;

use App\Services\Generators\BelongingsGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survivor extends Model
{
    use HasFactory;

    /**
     *
     * @var string
     */
    protected $table = 'survivors';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function belongings()
    {
        return $this->hasMany(Belongings::class);
    }

    /**
     * @return void
     */
    protected static function booted()
    {
        static::created(static function (self $survivor) {
            $generator = new BelongingsGenerator;
            $survivor->belongings()->createMany($generator->randomItems());
        });
    }
}
