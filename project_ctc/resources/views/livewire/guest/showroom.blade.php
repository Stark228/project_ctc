<div>
    <div x-data="{ currentImage: 0, images: [
        @foreach($car->images as $image)
            '{{ asset($image->image_path) }}'{{ !$loop->last ? ',' : '' }}
        @endforeach
        ] }">
            <div class="relative">
                <img :src="images[currentImage]" alt="Tundra SR5" class="w-full h-screen object-cover rounded-lg">
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
    <div class="mt-6 space-y-4 p-20 mx-20">
        <div class="mx-20 px-20">
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Brand</span>
            <span class="font-semibold">{{$car->model->brand->name}}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Model</span>
            <span class="font-semibold">{{$car->model->name}}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Fuel Type</span>
            <span class="font-semibold">{{ $car->fuel_type->type }}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Body Type</span>
            <span class="font-semibold">{{ $car->car_type->type }}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Transmission</span>
            <span class="font-semibold">{{ $car->transmission_type->type }}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Mileage</span>
            <span class="font-semibold">{{ $car->mileage }} km</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Seat Count</span>
            <span class="font-semibold">{{ $car->car_seater->seats }}</span>
        </div>
    
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Safety Rating</span>
            <div class="flex gap-1 mt-1">
                @for ($i = 0; $i < $car->safety_rating; $i++)
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor" class="text-yellow-400">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                @endfor
            </div>
        </div>
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

    <!-- Video Section -->
    <div class="mt-12 min-h-screen flex flex-col justify-center items-center py-12">
        <h2 class="text-4xl font-bold text-center mb-8">{{ $car->model->name }}</h2>
        <div class="w-full max-w-6xl mx-auto px-6">
            <div class="rounded-lg overflow-hidden shadow-lg bg-black">
                <!-- Video Player -->
                <video controls autoplay loop class="w-full h-auto" style="max-height: 80vh;">
                    <source src="{{ asset('video/Supra.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</div>
