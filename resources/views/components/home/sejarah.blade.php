<section class="pb-24" id="sejarah">
    <h1 class="text-center font-poppins_bold text-[32px] text-primary">Sejarah</h1>
    <div class="flex flex-col justify-center items-center gap-8 mt-12">
        @foreach($sejarah as $sejarahs)
            <div class="flex lg:flex-row flex-col justify-between items-center w-[300px] lg:w-[900px] h-auto lg:py-0 py-6 lg:h-[250px] bg-primary rounded-lg lg:gap-12 gap-6">
                <img src="{{ asset('img/story/sejarah-smk1.jpeg') }}" alt="" class="rounded-lg w-[250px] h-[250px]">
                <p class="text-white text-[12px] lg:text-[14px] font-poppins_regular text-justify px-5 lg:pr-12">{{ $sejarahs->sejarah_1 }}</p>
            </div>
            <div class="flex lg:flex-row flex-col-reverse justify-between items-center w-[300px] lg:w-[900px] h-auto lg:py-0 py-6 lg:h-[250px] bg-primary rounded-lg lg:gap-12 gap-6">
                <p class="text-white text-[12px] lg:text-[14px] font-poppins_regular text-justify px-5 lg:pr-12">{{ $sejarahs->sejarah_2 }}</p>
                <img src="{{ asset('img/story/sejarah-smk2.jpg') }}" alt="" class="rounded-lg w-[250px] h-[250px]">
            </div>
            <div class="flex lg:flex-row flex-col justify-between items-center w-[300px] lg:w-[900px] h-auto lg:py-0 py-6 lg:h-[250px] bg-primary rounded-lg lg:gap-12 gap-6">
                <img src="{{ asset('img/story/sejarah-smk3.jpg') }}" alt="" class="rounded-lg w-[250px] h-[250px]">
                <p class="text-white text-[12px] lg:text-[14px] font-poppins_regular text-justify px-5 lg:pr-12">{{ $sejarahs->sejarah_3 }}</p>
            </div>
        @endforeach
    </div>
</section>