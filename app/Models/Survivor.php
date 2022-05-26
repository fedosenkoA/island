<?php

namespace App\Models;

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

    protected $guarded = [];

    public function belongings()
    {
        return $this->hasMany(Belongings::class);
    }
}
