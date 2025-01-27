<?php

namespace App\Livewire\Guest;

use App\Models\AppointmentForm;
use Livewire\Component;

class TrackAppointment extends Component
{
    public $appointmentId; 
    public $appointmentDetails; 

    protected $rules = [
        'appointmentId' => 'required|string|exists:appointment_forms,appointment_track_id',
    ];

    public function track()
    {
        $this->validate();

        $this->appointmentDetails = AppointmentForm::where('appointment_track_id', $this->appointmentId)->first();
    }

    public function render()
    {
        return view('livewire.guest.track-appointment');
    }
}
