@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-[100vh] flex flex-col justify-center items-center">
        <div class="w-[70%] bg-white p-4 py-8 rounded-lg">
            <h1 class="text-primary font-poppins_bold text-[32px] text-center">Tambah Berita</h1>
            <form action="{{ route('berita.post') }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center mt-12 gap-6">
                @csrf
                <input type="text" name="name" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Nama Berita" required>
                <textarea type="text" name="desc" class="lg:w-[500px] pt-3 w-[300px] h-[45px] lg:h-[120px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Deskripsi" required></textarea>
                <input type="file" name="image" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none" placeholder="Foto" required>
                <button type="submit" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] rounded-lg text-white bg-add font-poppins_semibold mt-8">Kirim</button>
            </form>
        </div>
    </section>
@endsection