<x-layout>
    <x-flash />
    <div class="row">
        <x-admin-sidebar />
        <div class="col-lg-9">
            <div class="col-lg-7 p-5 shadow rounded mt-5 mx-auto">
                <h1 class="display-3 text-center">
                    Add Products
                </h1>
                <form action="/add-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Product Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Add product name..."
                        id="">
                    @error('name')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Product Price</label>
                    <input class="form-control" type="number" name="price" placeholder="Add product price..."
                        id="">
                    @error('price')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Product desp</label>
                    <textarea class="form-control" name="description" placeholder="Add product description..." id="" cols="30"
                        rows="4"></textarea>
                    @error('description')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Product Category</label>
                    <select class="form-control" type="text" name="category" placeholder="Add product name..."
                        id="">
                        @foreach ($category as $item)
                            <option value="{{ $item->name }}">
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Product Location</label>
                    <input class="form-control" type="text" name="location" placeholder="Add product name..."
                        id="">
                    @error('location')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Product Image</label>
                    <input class="form-control" type="file" name="image" placeholder="Add product name..."
                        id="">
                    @error('image')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <button class="btn w-100 my-2 text-white" style="background:#182A3E">
                        Add product
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
