<div class="min-h-screen mt-24">
    <!-- Hero Section -->
    <div class="relative h-96 overflow-hidden rounded-2xl mx-6 mt-6">
        <!-- Hero Image (Static URL) -->
        <img 
            src="https://www.myluxurycart.com/_next/image?url=https%3A%2F%2Fbucket-7vbln7.s3.ap-south-1.amazonaws.com%2Ffd7185ff436b2e9e086d70cc6feef9ed0b1a03e2c1f2656f5ee2522507c243f5_homepage-banner.jpg&w=3840&q=75" 
            alt="Showroom Image" 
            class="w-full h-full object-cover rounded-2xl"
        >
        <!-- Overlay for Better Text Visibility -->
        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center rounded-2xl">
            <h1 class="text-5xl font-bold text-white">{{ $dealer->name }}</h1>
        </div>
    </div>

    <!-- Dealer Info Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Logo in the Center -->
            <div class="flex justify-center items-center">
                <img 
                    src="{{ asset($dealer->logo_image) }}" 
                    alt="{{ $dealer->name }} Logo" 
                    class="w-64 h-64 object-contain"
                >
            </div>

            <!-- Dealer Info on the Right -->
            <div class="space-y-6">
                <div class="flex justify-between items-center border-b pb-4">
                    <span class="text-gray-600 font-bold">Dealer</span>
                    <span class="font-semibold text-lg">{{ $dealer->name }}</span>
                </div>
                <div class="flex justify-between items-center border-b pb-4">
                    <span class="text-gray-600 font-bold">Email</span>
                    <span class="font-semibold text-green-500 text-lg">{{ $dealer->email }}</span>
                </div>
                <div class="flex justify-between items-center border-b pb-4">
                    <span class="text-gray-600 font-bold">Contact Number</span>
                    <span class="font-semibold text-lg">{{ $dealer->contact_number }}</span>
                </div>
                <div class="flex justify-between items-center border-b pb-4">
                    <span class="text-gray-600 font-bold">Address</span>
                    <span class="font-semibold text-lg">{{ $dealer->address }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Location Map Section -->
    <div class="container mx-auto px-6 py-12">
        <div class="w-full overflow-hidden rounded-2xl shadow-lg">
            <iframe 
                src="{{ $dealer->location_url }}" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                class="rounded-2xl"
            ></iframe>
        </div>
    </div>
</div>
