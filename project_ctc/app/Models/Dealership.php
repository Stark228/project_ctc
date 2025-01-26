<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dealership extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'logo_image', 'address', 'location_url', 'contact_number'];

    public function dealershipofficehours(): HasMany
    {
        return $this->hasMany(DealershipOfficeHour::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function appointmentforms(): HasMany
    {
        return $this->hasMany(AppointmentForm::class);
    }
}
