<x-layout>
    <x-flash />
    <div class="row">
        <x-admin-sidebar />
        <div class="col-lg-9">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>image</th>
                        <th>price</th>
                        <th>posted by</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <form action="/update-data/{{ $item->id }}" method="POST">
                            @csrf
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img width="70px" src="{{ asset('/storage/user_products/' . $item->image) }}"
                                        alt="">
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->user->email }}
                                    <input type="hidden" name="email" value="{{ $item->user->email }}">

                                </td>
                                <td>
                                    <button name="update-delete" value="Delete" class="btn btn-danger">
                                        Delete
                                    </button>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Update
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Price
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/update/{{ $item->id }}" method="POST">
                                                        @csrf
                                                        <input class="form-control" type="text" name="up_price"
                                                            value="{{ $item->price }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="update-delete" value="Update"
                                                                class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
