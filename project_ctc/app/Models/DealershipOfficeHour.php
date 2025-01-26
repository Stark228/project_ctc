<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DealershipOfficeHour extends Model
{
    use HasFactory;
    protected $fillable = ['dealership_id', 'day_of_week', 'opening_time', 'closing_time', 'is_off_day'];

    public function dealership(): BelongsTo
    {
        return $this->belongsTo(Dealership::class);
    }
}
