<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Dealership;

class Dealers extends Component
{
    
    public function render()
    {
        $dealers = Dealership::all();
        return view('livewire.guest.dealers',[
            'dealerships' => $dealers
        ]);
    }
}
