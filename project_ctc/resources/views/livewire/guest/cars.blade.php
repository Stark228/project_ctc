<div class="mt-16 pt-1">
    <div class="bg-gray-100 py-8 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">
                Discover Cars Built for Every Journey
            </h1>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 py-6 px-6">
        <div class="col-span-1">
            <div x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="sm:hidden text-sm text-gray-600 p-2 hover:bg-gray-200">
                    Toggle Filter
                </button>
                
                    <!-- Background overlay when filter is open -->
                <div 
                    class="fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden" 
                    x-show="isOpen" 
                    @click="isOpen = false"
                    x-transition.opacity
                >
                </div>
                    <!-- Filter Sidebar -->
                    <aside 
                        :class="isOpen ? 'translate-x-0' : '-translate-x-full'" 
                        class="inset-y-0 left-0 sm:z-60 w-64 bg-white border-r transform transition-transform duration-300 ease-in-out md:relative md:translate-x-0 md:w-full md:border-0">
                        <div class="p-4 border-b bg-white">
                            <div class="flex justify-between items-center">
                                <h2 class="text-xl font-semibold">Filters</h2>
                                <button @click="isOpen = false" class="md:hidden p-1 hover:bg-gray-100 rounded-full">
                                    <span class="material-icons">close</span>
                                </button>
                            </div>
                        </div>
                
                        <div class="flex-1 overflow-y-auto p-4">
                            <!-- Price Range -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Price Range</h3>
                                <div class="grid grid-cols-2 gap-4">
                                    <input type="number" placeholder="Min" class="px-3 py-2 border border-gray-400 rounded-lg" />
                                    <input type="number" placeholder="Max" class="px-3 py-2 border border-gray-400 rounded-lg" />
                                </div>
                            </div>
                
                            <!-- Vehicle Type -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Vehicle Type</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                            <!-- Brand -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Brand</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                            <!-- Fuel Type -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Fuel Type</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                            <!-- Transmission -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Transmission</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                
                            <!-- Seats -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Seat</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                
                            <!-- Safety Rating -->
                            <div class="mb-6">
                                <h3 class="font-medium mb-3">Safty rating</h3>
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach (['SUV', 'Sedan', 'Truck', 'Sports', 'Luxury', 'Electric'] as $type)
                                        <label class="flex items-center gap-2 p-2 border rounded-lg cursor-pointer">
                                            <input type="checkbox" class="rounded border-gray-300" />
                                            <span class="text-sm">{{ $type }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                
                        </div>
                    </aside>
                </div>
            </div>
    
        <div class="col-span-1 md:col-span-3">
            <div class="col-span-1 md:col-span-3">
                <div class="space-y-6">
                    @foreach ($cars as $car)
                        <a href="{{ route('cardetail', ['id' => $car->id]) }}">
                            <div class="border mb-3 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition bg-white flex flex-col md:flex-row">
                                <div class="md:w-1/3">
                                    
                                    <img src="{{  asset($car->images->first()?->image_path)  }}" alt="Car" class="h-full w-full object-cover">
                                </div>
                                <div class="p-4 flex flex-col justify-between md:w-2/3">
                                    <div>
                                        <h3 class="font-bold text-lg text-gray-800">{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->model->year }}</h3>
                                        <p class="text-gray-900 font-bold text-xl mt-2">Nu. {{ $car->price }}</p>
                                    </div>
                                    <!-- Tags -->
                                    <div class="flex flex-wrap gap-2 mt-3">
                                        <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->mileage }} km</span>
                                        <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->transmission_type->type }}</span>
                                        <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->car_type->type }}</span>
                                        <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->fuel_type->type }}</span>
                                    </div>
                                    <!-- Location -->
                                    <p class="text-sm text-gray-500 mt-4">{{ $car->dealer->name }}</p>
                                    <!-- Safety and Likes -->
                                    <div class="flex items-center justify-between mt-4">
                                        <div class="flex ">
                                            <span class="flex">
                                                @for ($i = 0; $i < $car->safety_rating; $i++)
                                                    <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                @endfor
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
