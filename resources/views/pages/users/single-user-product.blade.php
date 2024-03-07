<x-layout>

    <x-flash />
    <x-header />

    <form action="/send-mail" method="POST">
        @csrf
        <div class="row col-lg-7 mx-auto mt-5">
            <div class="left col-lg-7">

                <div class="slider border d-flex position-relative" style="overflow-x:hidden;">
                    @foreach ($singleProduct->image as $item)
                        <img class="rounded-2 imgs" style="object-fit: contain;;transition:all 0.9s" height="500px"
                            width="100%" src="{{ asset('/storage/user_products/' . $item) }}" alt="">
                    @endforeach
                    <input type="text" name="image" value="{{ $singleProduct->image[0] }}">
                    <i class="bi fs-2 bg-dark text-white p-1 ulta bi-arrow-left-short position-absolute"
                        style="top:50%;;clip-path:circle();cursor:pointer;"></i>
                    <i class="bi fs-2 bg-dark text-white p-1 right bi-arrow-right-short position-absolute"
                        style="right:0;top:50%;clip-path:circle();cursor:pointer;"></i>
                </div>
                <div class="card p-2 my-2">
                    <h1 class="display-4 fw-bolder text-dark">
                        Rs.{{ $singleProduct->price }}
                        <input type="hidden" name="price" value="{{ $singleProduct->price }}">
                    </h1>
                    <h3 class="fw-bold">
                        {{ $singleProduct->title }}
                        <input type="hidden" name="title" value="{{ $singleProduct->title }}">

                    </h3>
                    <p class="text-secondary">
                        <i class="bi bi-geo-alt"></i>{{ $singleProduct->location }}
                        <input type="hidden" name="location" value="{{ $singleProduct->location }}">

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
                            <p class="w-100">{{ $singleProduct->price }}</p>
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
                            {{ $singleProduct->description }}
                            <input type="hidden" name="description" value="{{ $singleProduct->description }}">

                        </p>
                    </div>

                    <hr>
                </div>
                <div class="">
                    <h3>Related Ads</h3>
                    <div class="row">

                        {{-- @foreach ($related as $item)
                        <a href="/single-product/{{ $item->id }}/{{ $item->category }}" class="col-lg-4">
                            <div class="card p-1">
                                <img width="100%" height="250px" style="object-fit: cover"
                                    src="{{ asset('/storage/' . $item->image) }}" alt="">
                            </div>
                        </a>
                    @endforeach --}}
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
                            <h6>{{ $singleProduct->user->name }}</h6>
                            <input type="hidden" name="user" value="{{ $singleProduct->user->name }}">

                            <p class="text-secondary">
                                member since 19 august 2019
                            </p>
                            <h6>See Profile</h6>
                        </div>
                    </div>
                    <button type="button" class="btn my-2 text-white" style="background: #002F34"> <i
                            class="bi bi-phone"></i> Show
                        Phone
                        Number</button>
                    <button type="submit" class="btn my-2 fw-bolder" style="border:2px solid #002F34;color:#002F34"> <i
                            class="bi bi-chat fw-bolder"></i> Send Mail</button>
                </div>
                <div class="card my-2 p-2">
                    <h4>Location</h4>
                    <p>

                        <i class="bi bi-geo"></i>
                        {{ $singleProduct->location }}
                    </p>
                </div>

            </div>

        </div>
        <input type="hidden" name="mail" value="{{ $singleProduct->user->email }}">
    </form>

    <x-footer />

    <script>
        let images = document.querySelectorAll('.imgs');
        let left = document.querySelector('.ulta')
        let right = document.querySelector('.right')
        let count = 0;
        let count2 = 0;

        right.addEventListener('click', () => {
            console.log(count)
            count++
            if (count > images.length - 1) {
                count = 0
            }
            images.forEach((img, index) => {
                img.style.transform = `translateX(${-100 * count}%)`
            })
        })
        left.addEventListener('click', () => {
            count--;
            if (count < 0) {
                count = images.length - 1;
            }

            images.forEach((img) => {
                img.style.transform = `translate(${-100 * count}%)`
            })

        })
    </script>


</x-layout>
