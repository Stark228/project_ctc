<?php

namespace App\Livewire\Guest;

use Livewire\Component;
use App\Models\Car;
use App\Models\Brand;
use App\Models\CarModel;


class Compare extends Component
{
    public $brands;  

    public $brand1 = null;         
    public $models1 = [];    
    public $model1;     

    public $brand2 = null;          
    public $models2 = [];    
    public $model2;          

    public $car1;            
    public $car2; 

    public function mount()
    {
        $this->brands = Brand::all();
        $this->updatedBrand1();
        $this->updatedBrand2();
    }

    public function updatedBrand1()
    {
        $this->models1 = CarModel::where('brand_id', $this->brand1)->get();
    }

    public function updatedBrand2()
    {
        $this->models2 = CarModel::where('brand_id', $this->brand2)->get();
    }
    public function fetchCars()
    {
        if ($this->model1) {
            $this->car1 = Car::where('model_id', $this->model1)->first();
        }

        if ($this->model2) {
            $this->car2 = Car::where('model_id', $this->model2)->first();
        }
    }
    public function render()
    {
        return view('livewire.guest.compare');
    }
}
