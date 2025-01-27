<nav class="fixed bg-black bg-opacity-60 text-white top-0 left-0 right-0 z-50 px-20 py-4 transition-all ease-in-out duration-300">
    <div class="mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-8 w-auto">
        </div>

        <div class="flex-1 text-center">
            <ul class="flex justify-center space-x-8">
                <li><a href="{{ route('welcome')}}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">Home</a></li>
                <li><a href="{{ route('cars')}}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">Cars</a></li>
                <li><a href="{{ route('compare') }}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">Compare</a></li>
                <li><a href="{{ route('dealers')}}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">Dealers</a></li>
                <li><a href="{{ route('about')}}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">About</a></li>
                <li><a href="{{ route('contact')}}" class="hover:text-orange-600 hover:underline hover:underline-offset-4 underline-orange-600">Contact</a></li>
            </ul>
        </div>

        <div class="flex space-x-2">
            <a href="{{ route('appointment_track')}}" class="text-white bg-black px-4 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors">Track Appointment</a>
            {{-- <a href="#" class="text-white bg-black px-4 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors">Sign In</a> --}}
        </div>
    </div>
</nav>
