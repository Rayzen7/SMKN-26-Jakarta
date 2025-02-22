@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-[100vh] flex flex-col justify-center items-center">
        <div class="w-[70%] bg-white p-4 py-8 rounded-lg">
            <h1 class="text-primary font-poppins_bold text-[32px] text-center">Edit Sejarah</h1>
            <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST" class="flex flex-col justify-center items-center mt-12 gap-6">
                @csrf
                @method('PUT')
                <input type="text" name="sejarah_1" value="{{ old('sejarah_1', $sejarah->sejarah_1) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Sejarah Bagian 1" required>
                <input type="text" name="sejarah_2" value="{{ old('sejarah_2', $sejarah->sejarah_2) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Sejarah Bagian 2" required>
                <input type="text" name="sejarah_3" value="{{ old('sejarah_3', $sejarah->sejarah_3) }}" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none border-primary border-2" placeholder="Sejarah Bagian 3" required>
                <button type="submit" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] rounded-lg text-white bg-primary font-poppins_semibold mt-8">Kirim</button>
            </form>
        </div>
    </section>
@endsection