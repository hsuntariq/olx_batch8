<x-layout>
    <h1 class="display-1">
        Product Bought
    </h1>
    <img width="300px" src="{{ asset('/storage/user_products/' . $mailData['image']) }}" alt="">
    <p class="text-seconadary">
        Your Product, <b> {{ $mailData['title'] }}</b> has been bought by <b>{{ auth()->user()->name }}</b>.<br>
        contact the on the following email address: <a href="">{{ auth()->user()->email }}</a>
    </p>

</x-layout>
