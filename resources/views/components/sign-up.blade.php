<style>
    /* .overlay {
        display: none !important;
    } */
</style>
<div class="overlay d-none sign-form justify-content-center align-items-center"
    style="width:100vw;height:100vh;position:fixed;top:0;background:rgba(0,0,0,0.6);z-index:222">
    <form action="/sign-up" method="POST" class="col-lg-5 position-relative mx-auto p-5 bg-white shadow-lg">
        @csrf
        <i class="bi close-form bi-x-lg position-absolute fs-3" style="right:30px;top:10px;cursor:pointer"></i>
        <label for="">Username</label>
        <input class="form-control" type="text" name="name" placeholder="Enter your name...">
        <label for="">Email</label>
        <input class="form-control" type="email" name="email" placeholder="Enter your email...">
        <label for="">Password</label>
        <input class="form-control" type="password" name="password" placeholder="Enter your password...">
        <label for="">Address</label>
        <input class="form-control" type="text" name="address" placeholder="Enter your address...">
        <label for="">Phone</label>
        <input class="form-control" type="text" name="phone" placeholder="Enter your phone...">

        <label for="">location</label>
        <input class="form-control" type="text" name="location" placeholder="Enter your location...">
        <button class="btn w-100 my-2 text-white" style="background: #002F34"> Sign
            Up</button>
    </form>
</div>
