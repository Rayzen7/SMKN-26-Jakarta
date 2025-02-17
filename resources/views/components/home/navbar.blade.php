<nav class="flex justify-between items-center bg-primary w-full h-[10vh] lg:h-[12vh] px-[35px] lg:px-[45px] fixed z-[50px]">
    <img src="{{ asset('img/logo/smk-logo.png') }}" alt="" class="lg:w-[40px] w-[30px] h-auto">
    <div class="flex navbar justify-center gap-9 items-center text-white lg:relative absolute top-0 right-0 lg:flex-row flex-col h-[100vh] lg:h-auto lg:w-auto w-[200px] lg:bg-none bg-primary">
        <a href="#" class="text-[14px] font-poppins_medium">Beranda</a>
        <a href="#sejarah" class="text-[14px] font-poppins_medium">Sejarah</a>
        <a href="#jurusan" class="text-[14px] font-poppins_medium">Jurusan</a>
        <a href="#berita" class="text-[14px] font-poppins_medium">Berita</a>
        <a href="#galeri" class="text-[14px] font-poppins_medium">Galeri</a>
        <a href="#informasi" class="text-[14px] font-poppins_medium">Formulir Informasi</a>
        <a href="/login">
            <button class="px-7 py-2 border-[1px] hover:bg-transparent hover:text-white transition-all duration-300 border-white cursor-pointer font-poppins_medium bg-white text-primary text-[14px] rounded-full">Masuk</button>
        </a>
    </div>
    <img src="{{ asset('icon/list.svg') }}" alt="" class="list relative z-10 w-[30px] h-[30px]">
</nav>

<style>
    .list {
        display: none
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .list {
            display: block
        }

        .navbar {
            transition: all ease-in-out 0.5s;
            transform: translateX(300%)
        }

        .navbar.active {
            transform: translateX(0);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const list = document.querySelector('.list');
        const navbar = document.querySelector('.navbar');

        list.addEventListener('click', function() {
            navbar.classList.toggle('active');
        });

    });
</script>