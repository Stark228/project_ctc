<?php

namespace App\Livewire\Guest;

use App\Models\Brand;
use Livewire\Component;
use App\Models\Car;
use App\Models\CarSeater;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\TransmissionType;

class Cars extends Component
{
    public $selectedBrands = [] ;
    public $selectedCarTypes = [];
    public $selectedFuelTypes = [];
    public $selectedTransmissions = [];
    public $selectedSeats = [];
    public $selectedRatings = [];
    public $minPrice;
    public $maxPrice;

    public function updated($propertyName)
    {
        $this->dispatch('filtersUpdated');
    }

    public function filterCars()
    {
        return Car::query()
            ->when($this->selectedBrands, fn($query) => $query->whereIn('model_id', $this->selectedBrands))
            ->when($this->selectedCarTypes, fn($query) => $query->whereIn('car_type_id', $this->selectedCarTypes))
            ->when($this->selectedFuelTypes, fn($query) => $query->whereIn('fuel_type_id', $this->selectedFuelTypes))
            ->when($this->selectedTransmissions, fn($query) => $query->whereIn('transmission_type_id', $this->selectedTransmissions))
            ->when($this->selectedSeats, fn($query) => $query->whereIn('car_seater_id', $this->selectedSeats))
            ->when($this->selectedRatings, fn($query) => $query->whereIn('safety_rating', $this->selectedRatings))
            ->when($this->minPrice, fn($query) => $query->where('price', '>=', $this->minPrice))
            ->when($this->maxPrice, fn($query) => $query->where('price', '<=', $this->maxPrice))
            ->get();
    }
    public function render()
    {
        $modelId = request()->query('model');
        if ($modelId) {
            $this->selectedBrands = [$modelId];  
        }
        $brands = Brand::all();
        $cartypes = CarType::all();
        $fueltypes = FuelType::all();
        $transmissions = TransmissionType::all();
        $seats = CarSeater::all();
        $stars = Car::select('safety_rating')->distinct()->pluck('safety_rating');
        $cars = $this->filterCars();
        return view('livewire.guest.cars', compact('brands', 'cartypes', 'fueltypes', 'transmissions', 'seats', 'stars', 'cars'));
    }
}
