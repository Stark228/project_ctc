<div>
    <section id="banner123" class="h-screen bg-cover bg-center">
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
                        <select wire:model.live="brand1" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-5">
                            <option value="">Select a brand</option>
                            @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="model" class="block mb-2 text-sm font-medium text-gray-900">Select Model</label>
                        <select wire:model="model1" id="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block w-full px-2 py-5">
                            <option value="">Select a model</option>
                            @foreach($models1 as $model)
                                <option value="{{ $model->id }}">{{ $model->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button wire:click="searchCars" class="rounded-lg text-2xl mt-5 text-white bg-black px-4 py-4 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors w-full">Search</button>
                </div>
            </div>
        </div>
    </section>
    <section  id="cars123" class="h-screen bg-cover bg-center">
        <div class="container mx-auto px-4 py-8">
            <div class="flex justify-between">
                <h1 class="text-2xl font-bold mb-6">The Most Searched Cars</h1>
                <div class="mt-4 flex justify-between items-center">
                    <a href="#" class="text-blue-500">View Details</a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($cars as $car)
                    <div class="bg-white shadow-md rounded-lg">
                        <img class="h-94" src="{{  asset($car->images->first()?->image_path)  }}" alt="" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h2 class="text-lg font-semibold mt-2">{{ $car->model->brand->name }} {{ $car->model->name }} {{ $car->model->year }}</h2>
                            <div class="mt-4 flex items-center text-sm text-gray-600">
                                <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->mileage }} km</span>
                                <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->car_type->type }}</span>
                                <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->transmission_type->type }}</span>
                                <span class="text-sm bg-gray-100 text-gray-800 px-2 py-1 rounded-full">{{ $car->fuel_type->type }}</span>
                            </div>
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
            <div class="testimonial-card">
                <p class="testimonial-quote">"Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn't on our original designs."</p>
                <div class="testimonial-author">
                    <div>
                        <p class="testimonial-author-name">Leslie Alexander</p>
                        <p class="testimonial-author-title">Facebook</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-card">
                <p class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
                <div class="testimonial-author">
                    <div>
                        <p class="testimonial-author-name">Floyd Miles</p>
                        <p class="testimonial-author-title">Designer</p>
                    </div>
                </div>
            </div>
    
            <div class="testimonial-card">
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
    
    <div class="contact-section">
        <div class="contact-container">
          <div class="contact-content text-center">
            <h2>Have More Questions? Don't Hesitate To Reach Us</h2>
            <p>123 Queensberry Street, North Melbourne VIC3051, Australia.</p>
            <div class="contact-details flex justify-center">
              <div class="contact-item">
                <span class="icon">📞</span>
                <span>+76 956 039 999</span>
              </div>
              <div class="contact-item">
                <span class="icon">📧</span>
                <span>ali@boxcars.com</span>
              </div>
            </div>
            <button class="contact-btn">
              Get Started <span>&rarr;</span>
            </button>
          </div>
        </div>
      </div>
    </div>
</div>
