@if (session()->has('message'))
    <div style="width:max-content;left:45%;transition:all 0.9s"
        class="shadow flash position-fixed mx-auto mt-4 bg-success px-5 py-2 rounded-4 text-white fw-bolder">
        {{ session('message') }}
    </div>
@endif

<script>
    let flash = document.querySelector('.flash');
    setTimeout(() => {
        flash.style.transform = 'translateY(-250%)'

    }, 2000);
</script>
