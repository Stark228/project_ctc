<?php

namespace App\Livewire\Guest;

use App\Models\Dealership;
use Livewire\Component;

class DealerDetail extends Component
{
    public $id;
    public function render()
    {
        $dealer = Dealership::find($this->id);
        return view('livewire.guest.dealer-detail',[
            'dealer' => $dealer
        ]);
    }
}
