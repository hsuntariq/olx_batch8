<x-layout>
    <x-header />
    <x-slider />
    <x-sign-up />
    <div class="col-lg-7 mx-auto">
        <h4 class="fw-bold">
            All categories
        </h4>
        <div class="d-flex gap-5" style="flex-wrap: wrap">
            @foreach ($categories as $item)
                <div class="parent d-flex flex-column justify-content-between align-items-center">
                    <div style="background:{{ $item->color }};width:100px;height:100px"
                        class="rounded-circle d-flex justify-content-center align-items-center">
                        <img class="d-block m-auto" width="60%" height="60%"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                    </div>
                    <h5 class="text-center" style="width:100px">{{ $item->name }}

                    </h5>
                </div>
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

</x-layout>
