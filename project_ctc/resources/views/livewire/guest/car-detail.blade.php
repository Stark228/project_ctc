<div>
    <div class="max-w-7xl mx-auto px-4 py-8 mt-20">
        <h2 class="text-2xl font-semibold mb-6">{{$car->model->brand->name}} {{$car->model->name}} {{$car->model->year}}</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div x-data="{ currentImage: 0, images: [
                @foreach($car->images as $image)
                    '{{ asset($image->image_path) }}'{{ !$loop->last ? ',' : '' }}
                @endforeach
                ] }">
                    <div class="relative">
                        <img :src="images[currentImage]" alt="Tundra SR5" class="w-full h-[400px] object-cover rounded-lg">
                        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2">
                            <button @click="currentImage = (currentImage - 1 + images.length) % images.length" class="bg-white/80 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                            </button>
                            <button @click="currentImage = (currentImage + 1) % images.length" class="bg-white/80 rounded-full p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Specs Section -->
                <div class="bg-white rounded-lg p-6 shadow">
                    <h3 class="text-lg font-semibold mb-4">Specs</h3>
                    <div class="grid grid-cols-2 gap-y-4">
                        <div>
                            <p class="text-gray-600 text-sm">Brand</p>
                            <p class="font-medium">{{$car->model->brand->name}}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Model</p>
                            <p class="font-medium">{{$car->model->name}}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Fuel Type</p>
                            <p class="font-medium">{{ $car->fuel_type->type }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Body Type</p>
                            <p class="font-medium">{{ $car->car_type->type }}</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Transmission</p>
                            <p class="font-medium">{{ $car->transmission_type->type }}</p>
                        </div>
                       
                        <div>
                            <p class="text-gray-600 text-sm">Mileage</p>
                            <p class="font-medium">{{ $car->mileage }} km</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Seat Count</p>
                            <p class="font-medium">{{ $car->car_seater->seats }}</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600 text-sm">Safety Rating</p>
                        <div class="flex gap-1 mt-1">
                            @for ($i = 0; $i < $car->safety_rating; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-400">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Right Column -->
            <div class="space-y-6">
                <div class="bg-white rounded-lg p-6 shadow">
                    <h3 class="text-lg font-semibold mb-4">Car Price Info</h3>
                    <a href="{{route('showroom', ['id'=>$car->id])}}" class="w-full block text-center border bg-blue-600 text-white py-2 rounded font-medium hover:bg-blue-700">
                        Virtual Room Room
                    </a>
    
                    <div class="mt-6 space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-black">Price</span>
                            <span class="font-semibold">Nu. {{$car->price}}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Dealer Discount</span>
                            <span class="font-semibold text-green-500">Nu. {{$car->discount}}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Tax</span>
                            <span class="font-semibold">Nu. {{$car->tax}}</span>
                        </div>

                    </div>
                </div>
                <div class="bg-white rounded-lg p-6 shadow">
                    <h3 class="text-lg font-semibold mb-4">Dealership Info</h3>
                    <a href="{{ route('appointment', ['id' => $car->dealer->id]) }}" class="w-full block text-center border bg-blue-600 text-white py-2 rounded font-medium hover:bg-blue-700">
                        Book your Appointment
                    </a>
    
                    <div class="mt-6 space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-black">Dealer</span>
                            <span class="font-semibold">{{$car->dealer->name}}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Email</span>
                            <span class="font-semibold text-green-500">{{$car->dealer->email}}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Contact Number</span>
                            <span class="font-semibold">{{$car->dealer->contact_number}}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Address</span>
                            <span class="font-semibold">{{$car->dealer->address}}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
