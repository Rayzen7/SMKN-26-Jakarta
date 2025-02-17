<x-ui.wave-up/>
<div class="bg-primary -mt-3">
    <section class="pb-24">
        <h1 class="text-center font-poppins_bold text-white text-[24px] lg:pt-0 pt-6 lg:text-[32px]">Visi Misi</h1>
            @foreach($visimisi as $visimisis)
            <div class="flex lg:flex-row flex-col justify-center lg:items-start items-center gap-14 mt-20">
                <div class="bg-white rounded-xl w-[320px] lg:w-[450px] h-auto py-12 flex flex-col justify-start items-center gap-8">
                    <h1 class="text-center font-poppins_semibold text-primary text-[24px]">Visi</h1>
                    <p class="text-justify font-poppins_medium text-[12px] lg:text-[14px] w-auto lg:px-0 px-6 lg:w-[370px]">{{ $visimisis->visi }}</p>
                </div>
                <div class="bg-white rounded-xl w-[320px] lg:w-[450px] h-auto py-12 flex flex-col justify-start items-center gap-8">
                    <h1 class="text-center font-poppins_semibold text-primary text-[24px]">Misi</h1>
                    <p class="text-justify font-poppins_medium text-[12px] lg:text-[14px] w-auto lg:px-0 px-6 lg:w-[370px]">{{ $visimisis->misi }}</p>
                </div>
            </div>
            @endforeach
    </section>
</div>