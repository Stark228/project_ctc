<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['model_id', 'dealer_id', 'vehicle_identification_number', 'car_type_id', 'price', 'fuel_type_id', 'transmission_type_id', 'car_seater_id', 'safety_rating', 'tax', 'mileage', 'discount', 'like_count', 'is_available'];

    public function model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    public function car_type(): BelongsTo
    {
        return $this->belongsTo(CarType::class);
    }

    public function fuel_type(): BelongsTo
    {
        return $this->belongsTo(FuelType::class);
    }

    public function transmission_type(): BelongsTo
    {
        return $this->belongsTo(TransmissionType::class);
    }

    public function car_seater(): BelongsTo
    {
        return $this->belongsTo(CarSeater::class);
    }

    public function dealer(): BelongsTo
    {
        return $this->belongsTo(Dealership::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }
}
