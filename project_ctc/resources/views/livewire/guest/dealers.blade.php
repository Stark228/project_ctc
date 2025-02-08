<div class="mt-20 mb-20 pt-20 px-20">
    <!-- Page Heading and Introduction -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-900">Dealers We Work With</h1>
        <p class="mt-4 text-lg text-gray-600">
            We collaborate with trusted and experienced dealers to provide you with the best products and services. Explore our partners below.
        </p>
    </div>

    <!-- Dealers Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
        @foreach ($dealerships as $dealer)
            <a href="{{ route('dealer_detail', ['id' => $dealer->id]) }}" class="group">
                <!-- Card Container -->
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300">
                    <!-- Dealer Logo -->
                    <div class="flex justify-center items-center h-48">
                        <img class="h-32 w-auto object-contain" src="{{ asset($dealer->logo_image) }}" alt="{{ $dealer->name }} Logo">
                    </div>
                    <!-- Dealer Name -->
                    <p class="mt-6 text-center text-xl font-semibold text-gray-900 group-hover:text-blue-600 transition-colors duration-300">
                        {{ $dealer->name }}
                    </p>
                </div>
            </a>
        @endforeach
    </div>
</div>