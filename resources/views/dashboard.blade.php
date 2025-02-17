<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    {{-- message --}}
    @if(session('success'))
        <div class="flex absolute top-24 right-6 z-[60px] bg-add p-5 border-[2px] border-white fade font-poppins_medium text-[14px] text-white gap-6 rounded-lg">
            {{ session('success') }}
            <button onclick="this.parentElement.remove()" class="text-[14px] text-white">x</button>
        </div>
    @elseif(session('error'))
        {{ session('error') }}
    @endif

    {{-- Navbar Start --}}
    @include('components.home.navbar')
    {{-- Navbar End --}}

    {{-- Home Start --}}
    @include('components.home.home')
    {{-- Home End --}}

    {{-- About Start --}}
    @include('components.home.about')
    {{-- About End --}}

    {{-- Sejarah Start --}}
    @include('components.home.sejarah')
    {{-- Sejarah End --}}

    {{-- Visi Misi Start --}}
    @include('components.home.visi-misi')
    {{-- Visi Misi End --}}

    {{-- Jurusan Start --}}
    @include('components.home.jurusan')
    {{-- Jurusan End --}}

    {{-- Mitra Start --}}
    @include('components.home.mitra-kerja')
    {{-- Mitra End --}}

    {{-- Berita Start --}}
    @include('components.home.berita')
    {{-- Berita End --}}

    {{-- Galery Start --}}
    @include('components.home.galery')
    {{-- Galery End --}}

    {{-- Information Start --}}
    @include('components.home.formulir')
    {{-- Information End --}}

    {{-- footer --}}
    @include('components.home.footer')
    {{-- footer end --}}
</body>
</html>
