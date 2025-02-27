<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarModel extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id', 'name', 'year'];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }
}
