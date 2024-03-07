<x-layout>
    <x-flash />
    <x-header />
    <x-slider />
    <x-sign-up />
    <x-login />
    <div class="col-lg-7 mx-auto">
        <h4 class="fw-bold">
            All categories
        </h4>
        <div class="d-flex gap-5" style="flex-wrap: wrap">
            @foreach ($categories as $item)
                <a href="/single-category/{{ $item->name }}"
                    class="parent text-decoration-none d-flex flex-column justify-content-between align-items-center">
                    <div style="background:{{ $item->color }};width:100px;height:100px"
                        class="rounded-circle d-flex justify-content-center align-items-center">
                        <img class="d-block m-auto" width="60%" height="60%"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                    </div>
                    <h5 class="text-center" style="width:100px">{{ $item->name }}

                    </h5>
                </a>
            @endforeach
        </div>
        {{ $categories->links('pagination::bootstrap-5') }}
    </div>

    <div class="row col-lg-7 mx-auto mt-5">
        @foreach ($products as $item)
            <a href="/single-product/{{ $item->id }}/{{ $item->category }}"
                class="col-lg-4 text-decoration-none text-dark col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img width="100%" height="150px" class="d-block mx-auto" style="object-fit: cover;"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bolder">
                            Rs {{ $item->price }}
                        </h5>
                        <p class="text-secondary">
                            {{ $item->description }}
                        </p>
                        <p class="text-secondary">
                            {{ $item->location }}
                        </p>
                        <p class=" mt-3 text-secondary">
                            {{ $item->created_at }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <div class="row col-lg-7 mx-auto mt-5">
        @foreach ($userProducts as $item)
            <a href="/single-user-product/{{ $item->id }}"
                class="col-lg-4 text-decoration-none text-dark col-md-6">
                <div class="card">
                    <div class="card-header">
                        <img width="100%" height="150px" class="d-block mx-auto" style="object-fit: cover;"
                            src="{{ asset('/storage/user_products/' . $item->image[0]) }}" alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="fw-bolder">
                            Rs {{ $item->price }}
                        </h5>
                        <p class="text-secondary">
                            {{ $item->description }}
                        </p>
                        <p class="text-secondary">
                            {{ $item->location }}
                        </p>
                        <p class=" mt-3 text-secondary">
                            {{ $item->created_at }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>



    <script>
        let signUP = document.querySelector('.sign-up');
        let form = document.querySelector('.sign-form');
        let login = document.querySelector('.login');
        let lform = document.querySelector('.log-form');
        let close = document.querySelector('.close-form');
        let close2 = document.querySelector('.close-form2');
        signUP.addEventListener('click', () => {
            form.classList.remove('d-none')
            form.classList.add('d-flex')
        })
        close.addEventListener('click', () => {
            form.classList.remove('d-flex')
            form.classList.add('d-none')
        })
        login.addEventListener('click', () => {
            lform.classList.remove('d-none')
            lform.classList.add('d-flex')
        })
        close2.addEventListener('click', () => {
            lform.classList.remove('d-flex')
            lform.classList.add('d-none')
        })
    </script>


</x-layout>
