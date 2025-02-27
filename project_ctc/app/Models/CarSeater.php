<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CarSeater extends Model
{
    use HasFactory;
    protected $fillable = ['seats'];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }
}
