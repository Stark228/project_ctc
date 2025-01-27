<?php

namespace App\Livewire\Guest;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use Livewire\Component;

class Home extends Component
{
    public $brands;  
    public $brand1 = null;         
    public $models1 = [];    
    public $model1 = null;
    public function mount()
    {
        $this->brands = Brand::all();
        $this->updatedBrand1();
    }
    public function updatedBrand1()
    {
        $this->models1 = CarModel::where('brand_id', $this->brand1)->get();
    }
    public function searchCars()
    {
        if ($this->model1 && $this->brand1) {
            return redirect()->route('cars', [
                'model' => $this->model1,
            ]);
        }
    }

    public function render()
    {
        $cars = Car::orderBy('created_at', 'desc')->take(6)->get(); 

        return view('livewire.guest.home',[
            'cars' => $cars
        ]);
    }
}
