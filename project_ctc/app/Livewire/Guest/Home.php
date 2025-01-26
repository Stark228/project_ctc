<?php

namespace App\Livewire\Guest;

use App\Models\Car;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $cars = Car::orderBy('created_at', 'desc')->take(6)->get(); 

        return view('livewire.guest.home',[
            'cars' => $cars
        ]);
    }
}
