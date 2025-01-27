<div class="min-h-screen mt-20 px-20">
    <div class="mt-20 pt-20 space-y-4 ">
        <img src="{{ asset($dealer->logo_image) }}" alt="">
        <div class="flex justify-between items-center">
            <span class="text-gray-600 font-black">Dealer</span>
            <span class="font-semibold">{{$dealer->name}}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600">Email</span>
            <span class="font-semibold text-green-500">{{$dealer->email}}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600">Contact Number</span>
            <span class="font-semibold">{{$dealer->contact_number}}</span>
        </div>
        <div class="flex justify-between items-center">
            <span class="text-gray-600">Address</span>
            <span class="font-semibold">{{$dealer->address}}</span>
        </div>

        <div class="col-xl-8 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
            <iframe src="{{$dealer->location_url}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
