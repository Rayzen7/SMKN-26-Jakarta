<section class="lg:pb-32 pb-20" id="galeri">
    <h1 class="text-center font-poppins_bold text-primary text-[32px]">Galeri</h1>
    <div class="flex lg:flex-row flex-col justify-center items-center mt-12 gap-12 lg:gap-8 flex-wrap">
        @foreach($galeri as $galeris)
        <div class="flex flex-col items-center lg:px-0 px-8 lg:items-start gap-2 w-[350px] lg:h-[400px] h-auto">
            <img src="{{ asset('storage/' . $galeris->image) }}" alt="" class="lg:w-[350px] w-[280px] rounded-xl">
            <h1 class="text-start text-[20px] font-poppins_semibold">{{ $galeris->name }}</h1>
            <p class="text-justify text-[12px] lg:text-[14px] font-poppins_medium text-gray w-auto lg:w-[300px]">{{ $galeris->desc }}</p>
        </div>
        @endforeach
    </div>
</section>