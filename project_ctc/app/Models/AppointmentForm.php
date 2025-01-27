<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppointmentForm extends Model
{
    use HasFactory;
    protected $fillable = ['dealership_id', 'appointment_track_id', 'name', 'email', 'phone_number', 'address', 'visit_date_time'];

    public function dealership(): BelongsTo
    {
        return $this->belongsTo(Dealership::class);
    }
}
