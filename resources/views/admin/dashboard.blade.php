<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-bg_secondary">
    <section class="flex justify-between items-start">
        <div class="top-[20px] fixed z-20 left-[20px] cursor-pointer">
            <svg width="35" height="35" class="list fill-white" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.6665 10H9.99984V13.3333H6.6665V10ZM6.6665 18.3333H9.99984V21.6667H6.6665V18.3333ZM6.6665 26.6667H9.99984V30H6.6665V26.6667ZM33.3332 13.3333V10H13.3715V13.3333H31.3332H33.3332ZM13.3332 18.3333H33.3332V21.6667H13.3332V18.3333ZM13.3332 26.6667H33.3332V30H13.3332V26.6667Z"/>
            </svg>                
        </div>
        {{-- Navbar Start --}}
        <nav class="bg-primary z-10 w-[270px] navbar h-[100vh] fixed overflow-hidden flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center gap-3">
                <img src="{{ asset('icon/user.svg') }}" alt="" class="w-[50px] h-auto">
                <p class="text-center font-poppins_medium text-[20px] text-white">{{ Auth::user()->name }}</p>
            </div>
            <hr class="w-full h-[2px] bg-white outline-none border-none my-10" />
            <div class="flex flex-col justify-center items-center">
                <a href="/admin/sejarah" class="text-white font-poppins_medium text-[14px] hover:bg-white hover:text-primary w-[300px] py-4 text-center transition-all duration-200">Sejarah</a>
                <a href="/admin/visimisi" class="text-white font-poppins_medium text-[14px] hover:bg-white hover:text-primary w-[300px] py-4 text-center transition-all duration-200">Visi Misi</a>
                <a href="/admin/berita" class="text-white font-poppins_medium text-[14px] hover:bg-white hover:text-primary w-[300px] py-4 text-center transition-all duration-200">Berita</a>
                <a href="/admin/galeri" class="text-white font-poppins_medium text-[14px] hover:bg-white hover:text-primary w-[300px] py-4 text-center transition-all duration-200">Galeri</a>
                <a href="/admin/formulir" class="text-white font-poppins_medium text-[14px] hover:bg-white hover:text-primary w-[300px] py-4 text-center transition-all duration-200">Formulir Informasi</a>
            </div>
            <form action="{{ route('login.logout') }}" method="POST">
                @csrf
                <button type="submit">
                    <h1 class="text-white font-poppins_medium text-[20px] mt-16 cursor-pointer">Keluar</h1>
                </button>
            </form>
        </nav>
        {{-- Navbar End --}}

        @yield('content');

        {{-- message --}}
        @if(session('success'))
            <div class="flex absolute top-6 right-6 bg-add p-5 border-2 border-white fade font-poppins_medium text-[14px] text-white gap-6 rounded-lg">
                {{ session('success') }}
                <button onclick="this.parentElement.remove()" class="text-[14px] text-white">x</button>
            </div>
        @elseif(session('error'))
            {{ session('error') }}
        @endif
    </section>
</body>

<style>
    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
          to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .navbar,
    .list {
        transition: all ease-in-out 0.5s;
    }

    .navbar.active {
        width: 0;
    }

    .list.active {
        fill: #2680EB;
    }

    .fade {
        animation: fadeUp ease-in-out 0.4s;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const list = document.querySelector('.list');
        const navbar = document.querySelector('.navbar');

        list.addEventListener('click', function() {
            navbar.classList.toggle('active');
            list.classList.toggle('active');
        });
    });
</script>
</html>
