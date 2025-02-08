<div class="px-20 py-20 bg-gray-50">
    <div class="px-20 py-20">
        <div class="max-w-lg mx-auto mb-10 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Book an Appointment</h2>
            <p class="text-gray-600">Fill out the form below to schedule your appointment</p>
        </div>
        <form wire:submit.prevent="submit" class="w-full max-w-lg mx-auto space-y-6">
            @if (session()->has('message'))
                <div x-data="{ show: true }" 
                    x-init="setTimeout(() => show = false, 4000)" 
                    x-show="show"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="p-4 bg-green-50 text-green-700 text-sm font-medium rounded-lg border border-green-100 mb-6">
                    {{ session('message') }}
                </div>
            @endif
        
            <div class="space-y-2">
                <label for="name" class="text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" wire:model.live="name" 
                       class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400"
                       required />
                @error('name') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        
            <div class="space-y-2">
                <label for="email" class="text-sm font-medium text-gray-700">Your Email</label>
                <input type="email" id="email" wire:model.live="email" 
                       class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400"
                       required />
                @error('email') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        
            <div class="space-y-2">
                <label for="phone_number" class="text-sm font-medium text-gray-700">Your Phone Number</label>
                <input type="text" id="phone_number" wire:model.live="phone_number" 
                       class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400"
                       required />
                @error('phone_number') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        
            <div class="space-y-2">
                <label for="address" class="text-sm font-medium text-gray-700">Your Address</label>
                <input type="text" id="address" wire:model.live="address" 
                       class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors placeholder:text-gray-400"
                       required />
                @error('address') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
            </div>
        
            <div class="grid grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label for="date" class="text-sm font-medium text-gray-700">Date</label>
                    <input type="date" id="date" wire:model.live="date" 
                           class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                           required />
                    @error('date') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
        
                <div class="space-y-2">
                    <label for="time" class="text-sm font-medium text-gray-700">Time</label>
                    <input type="time" id="time" wire:model.live="time" 
                           class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                           required />
                    @error('time') <span class="text-sm text-red-500 mt-1">{{ $message }}</span> @enderror
                </div>
            </div>
        
            <div class="pt-4">
                <button type="submit" 
                        class="w-full bg-blue-600 text-white px-4 py-2.5 rounded-lg font-medium hover:bg-blue-700 transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
