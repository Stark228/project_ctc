<div>
    <div class="max-w-7xl mx-auto px-4 py-8 mt-20">
        <h2 class="text-2xl font-semibold mb-6">Brand Model Year</h2>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                <div x-data="{ currentImage: 0, images: ['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRH9T5qhzowEceit3HiG0RR9K9qCaY59cfOtw&s', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1dzAY9vxSYgd7Zz6Aji9j2-LaG3-BF5iw5w&s', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI2RLOBO8DYvk8aAUNEs6DJzCJzlgHT7HfAg&s'] }">
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
                            <p class="font-medium">Toyota</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Model</p>
                            <p class="font-medium">Toyota</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Fuel Type</p>
                            <p class="font-medium">Diesel</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Body Type</p>
                            <p class="font-medium">Pickup</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Transmission</p>
                            <p class="font-medium">Manual</p>
                        </div>
                       
                        <div>
                            <p class="text-gray-600 text-sm">Color</p>
                            <p class="font-medium">Black</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Mileage</p>
                            <p class="font-medium">50 miles</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm">Seat Count</p>
                            <p class="font-medium">4 seats</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600 text-sm">Safety Rating</p>
                        <div class="flex gap-1 mt-1">
                            @for ($i = 0; $i < 5; $i++)
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
                    <button class="w-full border bg-blue-600 text-white py-2 rounded font-medium hover:bg-blue-700">
                        Virtual Room Room
                    </button>
    
                    <div class="mt-6 space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-black">Price</span>
                            <span class="font-semibold">Nu. 42,00,000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Dealer Discount</span>
                            <span class="font-semibold text-green-500">Nu. 10,00,000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Tax</span>
                            <span class="font-semibold">Nu. 2,00,000</span>
                        </div>

                    </div>
                </div>
                {{-- <div class="bg-white rounded-lg p-6 shadow">
                    <h3 class="text-lg font-semibold mb-4">Dealer Info</h3>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Dealer</span>
                        <span class="font-semibold">Nu. 2,00,000 (5%)</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Email</span>
                        <span class="font-semibold">Email</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Contact Number</span>
                        <span class="font-semibold">178625363</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-600">Address</span>
                        <span class="font-semibold">Babesa, Thimphu</span>
                    </div>
                </div> --}}
                <div class="bg-white rounded-lg p-6 shadow">
                    <h3 class="text-lg font-semibold mb-4">Dealership Info</h3>
                    <button class="w-full border bg-blue-600 text-white py-2 rounded font-medium hover:bg-blue-700">
                        Book your Appointment
                    </button>
    
                    <div class="mt-6 space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600 font-black">Dealer</span>
                            <span class="font-semibold">Mg</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Email</span>
                            <span class="font-semibold text-green-500">Nu. 10,00,000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Contact Number</span>
                            <span class="font-semibold">Nu. 2,00,000</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-600">Address</span>
                            <span class="font-semibold">Babesa, Thimphu</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
