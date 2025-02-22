@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-[100vh] flex flex-col justify-center items-center">
        <div class="flex justify-start items-center px-[30px]">
            <h1 class="text-primary font-poppins_bold text-[32px] text-start">Formulir Informasi</h1>
        </div>
        <hr class="w-[80%] h-[2px] bg-gray outline-none border-none my-6" />
        <div class="flex justify-center items-center gap-6 flex-wrap">
            @foreach($formulir as $formulirs)
            <div class="w-auto bg-white p-4 py-8 rounded-lg">
                <div class="text-[14px] font-poppins_regular w-[400px] px-6 gap-4 flex flex-col text-justify">
                    <p>Nama: {{ $formulirs->name }}</p>
                    <p>Email: {{ $formulirs->email }}</p>
                    <p>No. Handphone: {{ $formulirs->no }}</p>
                    <p>Pertanyaan: {{ $formulirs->ask }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection