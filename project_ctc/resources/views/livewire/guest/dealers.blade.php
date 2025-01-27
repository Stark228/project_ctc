<div class="mt-20 pt-20 px-20">
    <div class="flex min-h-screen space-x-5">
        @foreach ($dealerships as $dealer)
            <a href="{{ route('dealer_detail', ['id' => $dealer->id])}}">
                <img class="h-20" src="{{  asset($dealer->logo_image)  }}" alt="">
                <p>{{$dealer->name}}</p>
            </a>
        @endforeach
    </div>
</div>
