<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Car;

class Cars extends Component
{
    public function render()
    {
        $cars = Car::all();
        return view('livewire.guest.cars',[
            'cars' => $cars
        ]);
    }
}
