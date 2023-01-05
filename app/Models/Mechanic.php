<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function carOwner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
                                        // Relasi ke owner, melalui Car model
    }
}
