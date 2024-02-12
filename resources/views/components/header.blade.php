<style>
    main {
        background: #F7F8F8;
    }
</style>
<main>
    <div class="container col-lg-7 mx-auto p-2">

        <header>
            <div class="d-flex gap-5">
                <img width="60px" src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Symbol.png" alt="">
                <div class="d-flex gap-3 align-items-center">
                    <div class="logo">
                        <i class="bi fs-4 bi-car-front"></i>
                    </div>
                    <div class="text">
                        <p class="m-0 p-0"> Motors</p>
                    </div>
                </div>
                <div class="d-flex gap-3 align-items-center">
                    <div class="logo">
                        <i class="bi fs-4 bi-phone"></i>
                    </div>
                    <div class="text">
                        <p class="m-0 p-0"> Mobiles</p>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <nav class="col-lg-7 mx-auto py-3">
        <div class="d-flex align-items-center gap-3">
            <div class="logo">
                <img width="90px" src="https://logos-world.net/wp-content/uploads/2022/04/OLX-Symbol.png"
                    alt="">
            </div>
            <div class="search d-flex w-100 gap-3">
                <form action="/location" method="POST" class="w-25">
                    <select name="location" class="form-control" style="border:2px solid #002F34" id="">
                        <option value="">Karachi</option>
                        <option value="">Islamabad</option>
                        <option value="">lahore</option>
                    </select>
                </form>
                <form action="/search-product" class="w-75" method="POST">
                    <input placeholder="Find Car, mobile phones and much more..." type="search"
                        style="border:2px solid #002F34" name="product" class="form-control" id="">
                </form>
            </div>
            <div class="d-flex gap-3 justify-content-between align-items-center">
                <a href="/" style="color: #002F34" class="fw-bolder fs-5">Login</a>
                <div class="sell position-relative">
                    <img src="https://www.olx.com.pk/assets/iconSellBorder_noinline.d9eebe038fbfae9f90fd61d971037e02.svg"
                        alt="">
                    <div class="d-flex position-absolute align-items-center justify-content-center"
                        style="top: 50%;left:50%;transform:translate(-50%,-50%)">
                        <i class="bi bi-plus-lg"></i>
                        <h5 class="p-0 m-0">Sell</h5>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</main>
