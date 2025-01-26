<?php

namespace App\Livewire\Guest;

use App\Models\AppointmentForm;
use Livewire\Component;

class Appointment extends Component
{
    public $name, $email, $phone_number, $address, $date, $time;
    public $id;
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone_number' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        $visitDateTime = "{$this->date} {$this->time}";

        AppointmentForm::create([
            'appointment_track_id' => uniqid('APT-'),
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'visit_date_time' => $visitDateTime,
            'dealership_id' => $this->id,
        ]);

        session()->flash('message', 'Appointment created successfully.');
        $this->reset(); 
    }
    public function render()
    {
        return view('livewire.guest.appointment');
    }
}
