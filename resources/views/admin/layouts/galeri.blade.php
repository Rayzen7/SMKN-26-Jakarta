@extends('admin.dashboard')

@section('content')
    <section class="w-full pl-[270px] my-12 h-auto py-[24px] flex flex-col justify-center items-center">
        <div class="w-[90%] bg-white p-4 py-8 rounded-lg">
            <div class="flex justify-between items-center px-[30px]">
                <h1 class="text-primary font-poppins_bold text-[32px]">Galeri</h1>
                <a href="/admin/add/galeri">
                    <button class=" bg-add px-7 py-2 border-2 border-add text-white text-[14px] font-poppins_medium rounded-xl hover:bg-transparent hover:text-add duration-200 transition-all">
                        Tambah
                    </button>
                </a>
            </div>
            <table style="border-collapse: collapse;" class="mx-auto">
                <tr class="">
                    <th class="px-[85px] py-[10px] font-poppins_medium text-center text-[16px] text-gray">No</th>
                    <th class="px-[85px] py-[10px] font-poppins_medium text-center text-[16px] text-gray">Nama</th>
                    <th class="px-[85px] py-[10px] font-poppins_medium text-center text-[16px] text-gray">Foto</th>
                    <th class="px-[85px] py-[10px] font-poppins_medium text-center text-[16px] text-gray">Aksi</th>
                </tr>
                <hr class="w-full h-[2px] bg-gray outline-none border-none my-4" />
                @foreach($galeri as $galeris)
                <tr class="">
                    <td class="px-[35px] py-[15px] font-poppins_medium text-center text-[12px] text-gray">{{ $loop->iteration }}</td>
                    <td class="w-[300px] py-[15px] px-[45px] font-poppins_medium text-center text-[12px] text-gray">{{ $galeris->name }}</td>
                    <td class="w-[300px] py-[15px] px-[45px] font-poppins_medium text-center text-[12px] text-gray">
                        <img src="{{ asset('storage/' . $galeris->image) }}" alt="" class="w-[120px] mx-auto h-auto rounded-xl">                
                    </td>
                    <td class="flex flex-col px-[35px] gap-3 py-[15px]">
                        <a href="{{ route('galeri.edit', $galeris->id) }}">
                            <button class="w-full bg-edit px-4 py-2 border-2 border-edit text-white text-[14px] font-poppins_medium rounded-xl hover:bg-transparent hover:text-edit duration-200 transition-all">
                                Edit
                            </button>
                        </a>
                        <form action="{{ route('galeri.delete', $galeris->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class=" bg-delete w-full px-7 py-2 border-2 border-delete text-white text-[14px] font-poppins_medium rounded-xl hover:bg-transparent hover:text-delete duration-200 transition-all">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
@endsection