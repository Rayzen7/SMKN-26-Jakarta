<section class="lg:pb-32 pb-20" id="berita">
    <h1 class="text-center font-poppins_bold text-primary text-[24px] lg:text-[32px]">Berita</h1>
    <div class="flex justify-center flex-col lg:gap-12 gap-16 items-center mt-12">
        @foreach($berita as $beritas)
        <div class="flex lg:flex-row flex-col justify-center gap-6 lg:gap-24 w-auto lg:px-0 px-8 lg:w-[900px] items-start">
            <img src="{{ asset('storage/' . $beritas->image) }}" alt="" class="w-[300px] lg:w-[330px] lg:mx-0 mx-auto h-auto rounded-lg">
            <div class="flex flex-col gap-2">
                <div class="flex justify-start items-center gap-2">
                    <img src="{{ asset('icon/calendar.svg') }}" alt="" class="w-[25px]">
                    <p class="text-[12px] font-poppins_regular text-gray">{{ $beritas->created_at }}</p>
                </div>
                <h1 class="text-[20px] font-poppins_semibold">{{ $beritas->name }}</h1>
                <p class="lg:text-[14px] text-[12px] font-poppins_medium text-gray text-justify">{{ $beritas->desc }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>