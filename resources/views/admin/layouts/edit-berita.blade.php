@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-[100vh] flex flex-col justify-center items-center">
        <div class="w-[70%] bg-white p-4 py-8 rounded-lg">
            <h1 class="text-primary font-poppins_bold text-[32px] text-center">Edit Berita</h1>
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center mt-12 gap-6">
                @method('PUT')
                @csrf
                <input type="text" name="name"  value="{{ old('name', $berita->name) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Nama Berita" required>
                <input type="text" name="desc" value="{{ old('desc', $berita->desc) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Deskripsi" required>
                <div class="flex">
                    <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="w-[200px] h-auto rounded-xl">
                    <input type="file" name="image" class="w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none" placeholder="Foto" required>
                </div>
                <button type="submit" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] rounded-lg text-white bg-add font-poppins_semibold mt-8">Ubah</button>
            </form>
        </div>
    </section>
@endsection