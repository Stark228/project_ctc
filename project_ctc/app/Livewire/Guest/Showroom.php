<?php

namespace App\Livewire\Guest;

use App\Models\Car;
use Livewire\Component;

class Showroom extends Component
{
    public $id;
    public function render()
    {
        $car = Car::find($this->id);
        return view('livewire.guest.showroom',[
            'car' => $car
        ]);
    }
}
