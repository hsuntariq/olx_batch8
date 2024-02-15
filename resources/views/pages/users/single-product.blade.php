<x-layout>
    <x-header />
    <div class="row col-lg-7 mx-auto mt-5">
        <div class="left col-lg-7">

            <div class="border">
                <img class="rounded-2" style="object-fit: contain" height="500px" width="100%"
                    src="{{ asset('/storage/' . $data->image) }}" alt="">
            </div>
            <div class="card p-2 my-2">
                <h1 class="display-4 fw-bolder text-dark">
                    Rs.{{ $data->price }}
                </h1>
                <h3 class="fw-bold">
                    {{ $data->name }}
                </h3>
                <p class="text-secondary">
                    <i class="bi bi-geo-alt"></i>{{ $data->name }}
                </p>
            </div>
            <div class="">
                <div class="card p-2">

                    <h4 class="text-dark">
                        Details
                    </h4>
                    <div class="d-flex justify-content-between">
                        <p class="w-100">Is Delievrable</p>
                        <p class="w-100">No</p>
                        <p class="w-100">Brand</p>
                        <p class="w-100">Oppo</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="w-100">Price</p>
                        <p class="w-100">{{ $data->price }}</p>
                        <p class="w-100">Condition</p>
                        <p class="w-100">Used</p>
                    </div>
                </div>

            </div>
            <div class=" my-2">
                <div class="card p-2">

                    <h4 class="text-dark">
                        Description
                    </h4>
                    <p class="text-secondary">
                        {{ $data->description }}
                    </p>
                </div>

                <hr>
            </div>
            <div class="">
                <h3>Related Ads</h3>
                <div class="row">

                    @foreach ($related as $item)
                        <a href="/single-product/{{ $item->id }}/{{ $item->category }}" class="col-lg-4">
                            <div class="card p-1">
                                <img width="100%" height="250px" style="object-fit: cover"
                                    src="{{ asset('/storage/' . $item->image) }}" alt="">
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="right col-lg-5">



            <div class="card p-2">
                <div class="d-flex gap-2 align-items-center">
                    <img width="100px" height="100px" class="rounded-circle" style=""
                        src="https://www.olx.com.pk/assets/iconProfilePicture.7975761176487dc62e25536d9a36a61d.png"
                        alt="">
                    <div class="user-info">
                        <h6>Tawakalbaig</h6>
                        <p class="text-secondary">
                            member since 19 august 2019
                        </p>
                        <h6>See Profile</h6>
                    </div>
                </div>
                <button class="btn my-2 text-white" style="background: #002F34"> <i class="bi bi-phone"></i> Show Phone
                    Number</button>
                <button class="btn my-2 fw-bolder" style="border:2px solid #002F34;color:#002F34"> <i
                        class="bi bi-chat fw-bolder"></i> Send Mail</button>
            </div>
            <div class="card my-2 p-2">
                <h4>Location</h4>
                <p>

                    <i class="bi bi-geo"></i>
                    {{ $data->location }}
                </p>
            </div>

        </div>

    </div>
    <x-footer />
</x-layout>
