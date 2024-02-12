<x-layout>
    <x-flash />
    <div class="row">
        <x-admin-sidebar />
        <div class="col-lg-9">
            <div class="col-lg-6 p-5 shadow mx-auto my-5">
                <form action="/add-category" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h1 class="display-3 text-center">
                        Add Category
                    </h1>
                    <label for="">Category Name</label>
                    <input class="form-control" type="text" name="name" placeholder="Enter categotry name..."
                        id="">
                    @error('name')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Category background Color</label>
                    <input class="form-control" type="color" name="color" placeholder="Enter categotry name..."
                        id="">
                    @error('color')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <label for="">Category image</label>
                    <input class="form-control" type="file" name="image" placeholder="Enter categotry name..."
                        id="">
                    @error('image')
                        <p class="text-danger fw-bolder">
                            {{ $message }}
                        </p>
                    @enderror
                    <button class="btn w-100 my-2 text-white" style="background:#182A3E">
                        Add Category
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
