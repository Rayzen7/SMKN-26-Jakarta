@extends('admin.dashboard')

@section('content')
    <section class="w-full h-[100vh] pl-[270px] my-12 relative flex flex-col justify-center items-center">
        <div class="w-[90%] bg-white p-4 py-8 rounded-lg">
            @foreach($sejarah as $sejarahs)
            <div class="flex justify-between items-center px-[30px]">
                <h1 class="text-primary font-poppins_bold text-[32px]">Sejarah</h1>
                <a href="{{ route('sejarah.edit', $sejarahs->id) }}">
                    <button class=" bg-edit px-7 py-2 border-2 border-edit text-white text-[14px] font-poppins_medium rounded-xl hover:bg-transparent hover:text-edit duration-200 transition-all">
                        Edit
                    </button>
                </a>
            </div>
            <hr class="w-full h-[2px] bg-gray outline-none border-none my-6" />
                <div class="text-[14px] font-poppins_regular px-6 gap-8 flex flex-col text-justify">
                    <p>{{ $sejarahs->sejarah_1 }}</p>
                    <p>{{ $sejarahs->sejarah_2 }}</p>
                    <p>{{ $sejarahs->sejarah_3 }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection