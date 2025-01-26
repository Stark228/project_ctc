<div class="min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 mt-20">
        <div class="flex">
            <h1 class="text-2xl font-semibold mb-8 mx-auto">Compare your Ride Models</h1>
        </div>
        <div class="space-y-4">
            <div class="flex justify-between w-full space-x-10">
                <div class="w-full">
                    <div class="mb-3">
                        <h3 class="font-medium">Car Brand</h3>
                        <select wire:model.live="brand1" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select a brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <h3 class="font-medium">Car Model</h3>
                        <select wire:model="model1" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select a model</option>
                            @foreach($models1 as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="w-full">
                    <div class="mb-3">
                        <h3 class="font-medium">Car Brand</h3>
                        <select wire:model.live="brand2" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select a brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <h3 class="font-medium">Car Model</h3>
                        <select wire:model="model2" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select a model</option>
                            @foreach($models2 as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button wire:click="fetchCars" class="text-white bg-black px-10 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors">Compare</button>
            </div>
            @if ($car1 && $car2)
            <div class="flex justify-between w-full space-x-10">
                <div class="w-full">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{  asset($car1->images->first()?->image_path)  }}" alt="Toyota Tundra" class="w-full h-64 object-cover">
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="text-2xl font-bold mb-6">Nu. {{$car1->price}}</div>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Dealer Discount</span>
                                <span class="font-medium">Nu. {{$car1->discount}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-medium">Nu. {{$car1->tax}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Body Type</span>
                                <span class="font-medium">{{ $car1->car_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Year Release</span>
                                <span class="font-medium">{{$car1->model->year}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transmission</span>
                                <span class="font-medium">{{ $car1->transmission_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fuel Type</span>
                                <span class="font-medium">{{ $car1->fuel_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Mileage</span>
                                <span class="font-medium">{{ $car1->mileage }} km</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Seat Count</span>
                                <span class="font-medium">{{ $car1->car_seater->seats }} seats</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Safety Rating</span>
                                <span class="flex">
                                    @for ($i = 0; $i < $car1->safety_rating; $i++)
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endfor
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="rounded-lg overflow-hidden">
                        <img src="{{  asset($car2->images->first()?->image_path)  }}" alt="Toyota Tundra" class="w-full h-64 object-cover">
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="text-2xl font-bold mb-6">Nu. {{$car2->price}}</div>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Dealer Discount</span>
                                <span class="font-medium">Nu. {{$car2->discount}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span class="font-medium">Nu. {{$car2->tax}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Body Type</span>
                                <span class="font-medium">{{ $car2->car_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Year Release</span>
                                <span class="font-medium">{{$car2->model->year}}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transmission</span>
                                <span class="font-medium">{{ $car2->transmission_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Fuel Type</span>
                                <span class="font-medium">{{ $car2->fuel_type->type }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Mileage</span>
                                <span class="font-medium">{{ $car2->mileage }} km</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Seat Count</span>
                                <span class="font-medium">{{ $car2->car_seater->seats }} seats</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Safety Rating</span>
                                <span class="flex">
                                    @for ($i = 0; $i < $car2->safety_rating; $i++)
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endfor
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
