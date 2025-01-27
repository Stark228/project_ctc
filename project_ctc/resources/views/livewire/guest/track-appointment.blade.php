<div>
    <div class="min-h-screen px-20">
        <div class="mt-20 pt-20">
            <label for="appointmentId" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Appointment ID</label>
            <input type="text" id="appointmentId" wire:model.lazy="appointmentId" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
            @error('appointmentId') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mt-10">
            <button wire:click="track" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center">Track Appointment</button>
        </div>

        @if ($appointmentDetails)
            <div class="mt-10 p-5 bg-gray-100 rounded-lg shadow-md">
                <h3 class="text-lg font-bold text-gray-800">Appointment Details:</h3>
                <p><strong>Name:</strong> {{ $appointmentDetails->name }}</p>
                <p><strong>Email:</strong> {{ $appointmentDetails->email }}</p>
                <p><strong>Phone Number:</strong> {{ $appointmentDetails->phone_number }}</p>
                <p><strong>Address:</strong> {{ $appointmentDetails->address }}</p>
                <p><strong>Visit Date & Time:</strong> {{ $appointmentDetails->visit_date_time }}</p>
                <p><strong>Dealership ID:</strong> {{ $appointmentDetails->dealership->name }}</p>
                <p><strong>Dealership ID:</strong> {{ $appointmentDetails->dealership->email }}</p>
                <p><strong>Dealership ID:</strong> {{ $appointmentDetails->dealership->contact_number }}</p>
                <p><strong>Dealership ID:</strong> {{ $appointmentDetails->dealership->address }}</p>
            </div>
        @else
            <p class="text-red-500 mt-5">No appointment found for the provided ID.</p>
        @endif
    </div>
</div>
