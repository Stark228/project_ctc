<div>
    <section id="banner" class="h-screen bg-cover bg-center">
        <div class="absolute inset-0">
            <img class="w-full lg:w-screen" src="{{ asset('assets/default_hero_banner.png') }}" alt="banner">
        </div> 
        <div class="relative flex items-center justify-start h-full px-20">
            <div>
                <h1 class="text-white text-4xl font-bold">Welcome to Our Website</h1>
                <div class="bg-white p-5 rounded-lg text-black mt-5">
                    <h3 class="text-black text-3xl font-bold">Choose your car</h3>
                    <div class="mt-3">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Select Brand</label>
                        <select id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-5">
                            <option selected>Choose a Brand</option>
                            <option value="US">United States</option>
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="model" class="block mb-2 text-sm font-medium text-gray-900">Select Model</label>
                        <select id="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-5">
                            <option selected>Choose a Model</option>
                            <option value="US">United States</option>
                        </select>
                    </div>
                    <button class="rounded-lg text-2xl mt-5 text-white bg-black px-4 py-4 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors w-full">Search</button>
                </div>
            </div>
        </div>
    </section>
    <section  id="cars" class="h-screen bg-cover bg-center">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold mb-6">The Most Searched Cars</h1>
                <div class="mt-4 flex justify-between items-center">
                    <a href="#" class="text-blue-500">View Details</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgb(51, 49, 49);transform: ;msFilter:;">
                        <path d="m18.707 12.707-1.414-1.414L13 15.586V6h-2v9.586l-4.293-4.293-1.414 1.414L12 19.414z"></path>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Example Car Card -->
                {{-- @foreach ($cars as $car) --}}
                    <div class="bg-white shadow-md rounded-lg">
                        <img class="h-full" src="{{ asset('assets/default_hero_banner.png')}}" alt="" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mt-2">brand model year</h2>
                            <div class="mt-4 flex items-center text-sm text-gray-600">
                                <span class="mr-4"><strong>mileage</strong> Miles</span>
                                <span class="mr-4">fuel'</span>
                                <span>transmission</span>
                            </div>
                            <span class="text-lg font-bold">10000</span>

                        </div>
                    </div>
                    
                {{-- @endforeach --}}
            </div>
        </div>
    </section>
    <section  id="compare" class="h-screen bg-cover bg-center">

    </section>
    <section  id="dealer" class="h-screen bg-cover bg-center">

    </section>
</div>
