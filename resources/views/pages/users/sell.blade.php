    <x-layout>
        <x-header />
        <h3 class="text-center my-2 fw-bold text-uppercase">
            post your add
        </h3>
        <div class="container p-5 col-lg-7 mx-auto rounded-3 border" style="border:1px solid #A3B4B6 my-5">
            <h4 class="fw-bold text-uppercase">
                include some details
            </h4>
            <form action="/post-add" method="POST" enctype="multipart/form-data">
                @csrf
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
                <div class="d-flex flex-wrap gap-3 w-100">
                    @php
                        $i = 0;
                        while ($i < 20) {
                            echo "<div class='p-4 border d-flex position-relative justify-content-center align-items-center'>
                                <input type='file' name ='upload' class='position-absolute image-input' style='opacity:0'>
                                <img src='' width='60px' height='60px' class='position-absolute prod-image'>
                                <i class='bi bi-camera'></i>
                            </div>";
                            $i++;
                        }
                    @endphp
                </div>
                <label for="">For the cover picture we recommend using the landscape mode.</label>

                <hr>

                <h4 class="fw-bold text-uppercase">
                    YOUR AD'S LOCATION
                </h4>
                <label for="">Location</label>
                <input type="text" class="form-control">


                <hr>
                <h4 class="fw-bold text-uppercase">
                    Review Your details
                </h4>
                <div class="d-flex">
                    <img width="100px"
                        src="https://www.olx.com.pk/assets/iconProfilePicture.7975761176487dc62e25536d9a36a61d.png"
                        alt="">
                    <div class="d-flex flex-column w-100">
                        <label for="">Name</label>
                        <input type="text" name="username" value="{{ auth()->user()->name }}"
                            class="form-control w-100">
                    </div>
                </div>
                <hr>
                <button class="btn text-white fw-bold" style="background: #002F34">
                    Post Now
                </button>
            </form>
        </div>


        <script>
            let inputs = document.querySelectorAll('.image-input')
            let images = document.querySelectorAll('.prod-image')
            inputs.forEach((inp, index) => {
                inp.addEventListener('change', (e) => {
                    const url = URL.createObjectURL(e.target.files[0]);
                    images[index - 1].src = url
                })
            })
        </script>



    </x-layout>
