<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function province()
    {
        return $this->hasMany(Province::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, Province::class);
                                        // Relasi ke City, melalui Province model
    }
}
