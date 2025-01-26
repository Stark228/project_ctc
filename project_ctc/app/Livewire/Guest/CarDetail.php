<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;

class CarDetail extends Component
{
    public $id; 

    public function mount($id) 
    {
        $this->id = $id; 
    }
    public function render()
    {
        $car = Car::with('images')->find($this->id);
        $carImages = $car->images->map(function ($image) {
            return Storage::url($image->image_path); // Assuming image_path is the path relative to storage/app/public
        })->toArray();
        return view('livewire.guest.car-detail', [
            'car' => $car,
            'carImages' => $carImages // Pass the URLs to the view

        ]);
    }
}
