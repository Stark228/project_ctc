<div>
    <section id="banner123" class="h-screen bg-cover bg-center">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset('assets/default_hero_banner.png') }}" alt="banner">
        </div> 
        <div class="relative flex items-center justify-start h-full px-20">
            <div>
                <h1 class="text-white text-4xl font-bold">Welcome to Our Website</h1>
                <div class="bg-white bg-opacity-85 p-5 rounded-lg text-black mt-5">
                    <h3 class="text-black text-3xl font-bold">Choose your car</h3>
                    <div class="mt-3">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900">Select Brand</label>
                        <select wire:model.live="brand1" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-2">
                            <option value="">Select a brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="model" class="block mb-2 text-sm font-medium text-gray-900">Select Model</label>
                        <select wire:model="model1" id="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-2">
                            <option value="">Select a model</option>
                            @foreach($models1 as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>
                        {{--    <div class="relative mt-3 mb-4">
                        <label for="small-range" class="block mb-2 text-sm font-medium text-gray-900">Select Price</label>
                        <input id="small-range" type="range" value="1000" min="100" max="1500" class="w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-0 -bottom-6">Min (Nu. 100)</span>
                 <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-1/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$500</span>
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute start-2/3 -translate-x-1/2 rtl:translate-x-1/2 -bottom-6">$1000</span> 
                        <span class="text-sm text-gray-500 dark:text-gray-400 absolute end-0 -bottom-6">Max (Nu. 1500)</span>                    
                    </div>--}}
                    <button wire:click="searchCars" class="rounded-lg text-2xl mt-5 text-white bg-black px-4 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors w-full">Search</button>
                </div>
            </div>
        </div>
    </section>
    <section id="cars123" class="bg-cover bg-center py-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">The Most Searched Cars</h1>
                <a href="#" class="rounded-lg text-xl mt-5 text-white bg-black px-4 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors">View Details</a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($cars as $car)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="overflow-hidden">
                            <img src="{{ asset($car->images->first()?->image_path) }}" alt="{{ $car->model->name }}" class="w-full h-48 object-cover transition-transform duration-300 hover:scale-105">
                        </div>
                        
                        <div class="p-4 text-left">
                            <h2 class="text-lg font-semibold mt-2">{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->model->year }}</h2>
                            <hr class="my-2 border-gray-300">
                            <div class="mt-5 mb-5 flex flex-wrap gap-2 text-sm text-gray-600">
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->mileage }} km</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->car_type->type }}</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->transmission_type->type }}</span>
                                <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->fuel_type->type }}</span>
                            </div>
                            <hr class="my-2 border-gray-300">
                            <p class="text-gray-900 font-bold text-xl mt-2">Nu. {{ $car->price }}</p>
                        </div>
                        
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    
<div class="relative">    
    <div class="testimonials-section">
        <h2 class="title">What Our Customers Say</h2>
        <div class="testimonials-container">
            <div class="testimonial-card bg-white rounded-lg shadow-md p-6">
                <p class="testimonial-quote">"Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn't on our original designs."</p>
                <div class="testimonial-author">
                    <div>
                        <p class="testimonial-author-name">Leslie Alexander</p>
                        <p class="testimonial-author-title">Facebook</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-card bg-white rounded-lg shadow-md p-6">
                <p class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                <div class="testimonial-author">
                    <div>
                        <p class="testimonial-author-name">Floyd Miles</p>
                        <p class="testimonial-author-title">Designer</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-card bg-white rounded-lg shadow-md p-6">
                <p class="testimonial-quote">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system."</p>
                <div class="testimonial-author">
                    <div>
                        <p class="testimonial-author-name">Dianne Russell</p>
                        <p class="testimonial-author-title">Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contact-section bg-gray-100 py-8">
        <div class="container mx-auto px-4">
          <div class="flex flex-col md:flex-row items-center md:items-start">
            <!-- Car Image -->
            <div class="w-full md:w-1/2 mb-6 md:mb-0">
              <img src="{{ asset('assets/default_hero_banner.png') }}" alt="Car Image" class="w-full h-auto rounded-lg shadow-md animate-pulse">
            </div>
            <!-- Contact Content -->
            <div class="w-full md:w-1/2 md:pl-8">
              <div class="text-center md:text-left">
                <h2 class="text-2xl font-bold mb-4">Have More Questions? Don't Hesitate To Reach Us</h2>
                <p class="text-gray-700 mb-4">123 Queensberry Street, North Melbourne VIC 3051, Australia.</p>
                <div class="contact-details flex flex-col md:flex-row justify-center md:justify-start items-center md:items-start mb-4">
                  <div class="contact-item flex items-center mb-2 md:mb-0 md:mr-6">
                    <span class="icon text-2xl mr-2 text-black hover:text-orange-600">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.97825 3.99999c-.3729 0-.74128.08169-1.07926.23933-.32394.1511-.61243.36846-.84696.63787-1.81892 1.82189-2.35302 3.87423-1.89899 5.93671.43916 1.9949 1.77747 3.8929 3.45642 5.572 1.67897 1.6791 3.57614 3.0176 5.57034 3.4591 2.0612.4563 4.1141-.0726 5.9396-1.8853.2705-.2348.4888-.524.6405-.8489.1581-.3387.2401-.7081.2401-1.0819 0-.3739-.082-.7432-.2401-1.0819-.1516-.3247-.3696-.6137-.6398-.8483l-1.2098-1.2106c-.5043-.5041-1.1879-.7872-1.9007-.7872-.7128 0-1.3968.2835-1.9011.7876l-.6178.6181c-.1512.1513-.3563.2363-.5701.2363-.2138 0-.4189-.085-.5701-.2363l-1.85336-1.8545c-.15117-.1513-.23609-.3565-.23609-.5704 0-.214.08493-.4192.23613-.5705l.61812-.61851c.5037-.50461.7867-1.18868.7867-1.90191s-.2833-1.39767-.7871-1.90228L8.90499 4.8778c-.23462-.26969-.5233-.48727-.84749-.63848-.33798-.15764-.70636-.23933-1.07925-.23933Z"/>
                            <path fill-rule="evenodd" d="M14.9925 3.99996c0-.55228.4477-.99999 1-.99999l3.03.00002c.5523 0 1 .44772 1 1v2.98135c0 .55228-.4478 1-1 1-.5523 0-1-.44772-1-1v-.58113l-3.3184 3.29112c-.3921.38887-1.0253.38627-1.4142-.00583-.3889-.39213-.3863-1.02529.0059-1.4142l3.2983-3.27133h-.6016c-.5523 0-1-.44772-1-1.00001Z" clip-rule="evenodd"/>
                          </svg>                          
                    </span>
                    <span class="text-gray-700">+76 956 039 999</span>
                  </div>
                  <div class="contact-item flex items-center">
                    <span class="icon text-2xl mr-2 text-black hover:text-orange-600">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
                          </svg>
                    </span>
                    <span class="text-gray-700">ali@boxcars.com</span>
                  </div>
                </div>
                {{-- <button class="contact-btn bg-blue-500 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                  Get Started <span>&rarr;</span>
                </button> --}}
                <button class="text-white bg-black px-4 py-2 border border-white-2 rounded-lg hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors">
                  Get Started <span>&rarr;</span>
                </button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
