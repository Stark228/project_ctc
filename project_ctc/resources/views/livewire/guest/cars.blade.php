<div class="mt-16 pt-1">
    <div class="bg-gray-100 py-8 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">Discover Cars Built for Every Journey</h1>
        </div>
    </div>

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 py-6 px-6">
        <!-- Filters Sidebar -->
        <div class="col-span-1">
            <div>
                <h2 class="text-xl font-bold mb-4">Filters</h2>

                <!-- Price Range -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Price Range</h3>
                    <div class="grid grid-cols-2 gap-2">
                        <input type="number" wire:model.live="minPrice" placeholder="Min" class="w-full border-gray-300 rounded-md px-3 py-2" />
                        <input type="number" wire:model.live="maxPrice" placeholder="Max" class="w-full border-gray-300 rounded-md px-3 py-2" />
                    </div>
                </div>

                <!-- Brand -->
                {{-- <div class="mb-6">
                    <h3 class="font-medium mb-2">Brand</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($brands as $brand)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedBrands" value="{{ $brand->id }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $brand->name }}</span>
                            </label>
                        @endforeach
                    </div>
                </div> --}}

                <!-- Car Type -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Vehicle Type</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($cartypes as $type)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedCarTypes" value="{{ $type->id }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $type->type }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Fuel Type -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Fuel Type</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($fueltypes as $type)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedFuelTypes" value="{{ $type->id }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $type->type }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Transmission -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Transmission</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($transmissions as $transmission)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedTransmissions" value="{{ $transmission->id }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $transmission->type }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Seats -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Seats</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($seats as $seat)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedSeats" value="{{ $seat->id }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $seat->seats }} Seats</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Safety Rating -->
                <div class="mb-6">
                    <h3 class="font-medium mb-2">Safety Rating</h3>
                    <div class="grid grid-cols-2 gap-2">
                        @foreach ($stars as $rating)
                            <label class="flex items-center gap-2">
                                <input type="checkbox" wire:model.live="selectedRatings" value="{{ $rating }}" class="rounded border-gray-300" />
                                <span class="text-sm">{{ $rating }} Stars</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Cars List -->
        <div class="col-span-1 md:col-span-3">
            <div class="space-y-6">
                @forelse ($cars as $car)
                    <a href="{{ route('cardetail', ['id'=>$car->id] )}}" class="border rounded-lg cursor-pointer overflow-hidden shadow-sm hover:shadow-md bg-white flex flex-col md:flex-row">
                        <div class="md:w-1/3">
                            <img src="{{ asset($car->images->first()?->image_path) }}" alt="Car Image" class="h-full w-full object-cover" />
                        </div>
                        <div class="p-4 md:w-2/3">
                            <h3 class="text-lg font-bold">{{ $car->model->brand->name }} {{ $car->model->name }} ({{ $car->model->year }})</h3>
                            <p class="text-xl font-bold text-gray-800 mt-1">Nu. {{ $car->price }}</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">{{ $car->mileage }} km</span>
                                <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">{{ $car->transmission_type->type }}</span>
                                <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">{{ $car->car_type->type }}</span>
                                <span class="text-sm bg-gray-100 px-2 py-1 rounded-full">{{ $car->fuel_type->type }}</span>
                            </div>
                            <div class="flex gap-1 mt-2">
                                @for ($i = 0; $i < $car->safety_rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-400">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-gray-600">No cars match the selected filters.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
