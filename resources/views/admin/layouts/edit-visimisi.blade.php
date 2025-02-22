@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-[100vh] flex flex-col justify-center items-center">
        <div class="w-[70%] bg-white p-4 py-8 rounded-lg">
            <h1 class="text-primary font-poppins_bold text-[32px] text-center">Edit Visi Misi</h1>
            <p class="text-center font-poppins_medium text-[12px]">harap Pastikan Formulir Terisi Benar</p>
            <form action="{{ route('visimisi.update', $visimisi->id) }}" method="POST" class="flex flex-col justify-center items-center mt-12 gap-6">
                @csrf
                @method('PUT')
                <input type="text" name="visi" value="{{ old('visi', $visimisi->visi) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Visi" required>
                <input type="text" name="misi" value="{{ old('misi', $visimisi->misi) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Misi" required>
                <button type="submit" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] rounded-lg text-white bg-primary font-poppins_semibold mt-8">Kirim</button>
            </form>
        </div>
    </section>
@endsection