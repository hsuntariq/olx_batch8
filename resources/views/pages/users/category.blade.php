<x-layout>
    <x-header />
    {{-- {{ $products }} --}}
    @if (count($products) > 0)
        @foreach ($products as $item)
            <div class="col-lg-9 ms-auto border my-2">
                <div class="row">
                    <div class="col-2">
                        <img height="200px" width="200px" src="{{ asset('/storage/user_products/' . $item->image[0]) }}"
                            alt="">
                    </div>
                    <div class="col-10">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->description }}</p>
                        <p>Rs {{ $item->price }}</p>
                        <button class="btn btn-info">Call</button>
                        <button class="btn btn-success">Chat</button>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h1 class="display-3 text-center">
            No Products in this category
        </h1>
    @endif
</x-layout>
