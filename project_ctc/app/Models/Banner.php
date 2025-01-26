<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Banner extends Model
{
    use HasFactory;
    protected $fillable = ['car_id', 'image_path', 'heading', 'description'];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
    