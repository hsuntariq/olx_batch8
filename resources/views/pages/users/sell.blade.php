<x-layout>
    <x-header />
    <h3 class="text-center fw-bold text-uppercase">
        post your add
    </h3>
    <div class="container p-5 col-lg-7 mx-auto rounded-3 border" style="border:1px solid #A3B4B6">
        <h4 class="fw-bold text-uppercase">
            include some details
        </h4>
        <form action="">
            <label for="">Ad title</label>
            <textarea name="title" id="" cols="30" rows="2" class="form-control"></textarea>
            <label for="">Mention the key features of your item (e.g. brand, model, age, type)</label>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            <label for="">Include condition,features and reason for selling</label>
            <hr>
            <h4 class="fw-bold text-uppercase">
                set a price
            </h4>
            <label for="">Price</label>
            <div class="d-flex border gap-1 rounded-2 align-items-center px-4">
                <span>Rs </span>
                <span>|</span>
                <input name=""class="form-control border-0" />
                <hr>
            </div>
            <h4 class="fw-bold text-uppercase">
                upload upto 20 photos
            </h4>
            <div class="d-flex ">
                <div class="p-5 border d-flex justify-content-center align-items-cneter">
                    <i class="bi bi-camera"></i>
                </div>
            </div>
        </form>
    </div>

</x-layout>
