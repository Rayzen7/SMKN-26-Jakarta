<section class="bg-cover bg-center w-full h-[100vh] flex flex-col justify-center items-center" id="informasi"
style="background-image: url({{ asset('img/school/smk2.jpeg') }})">
    <h1 class="text-center font-poppins_bold text-white text-[24px] lg:text-[32px]">Formulir Informasi</h1>
    <form action="{{ route('dashboard.post') }}" class="mt-12 flex flex-col gap-4" method="POST">
        @csrf
        <input type="text" name="name" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none focus:border-primary focus:border-2" placeholder="Nama" required>
        <input type="email" name="email" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none focus:border-primary focus:border-2" placeholder="Email" required>
        <input type="no" name="no" class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] text-[14px] font-poppins_medium pl-3 rounded-lg outline-none focus:border-primary focus:border-2" placeholder="No Handphone" required>
        <textarea name="ask" id="" class="w-[300px] lg:w-[500px] text-gray h-[100px] lg:h-[140px] text-[14px] pt-3 font-poppins_medium pl-3 rounded-lg outline-none focus:border-primary focus:border-2" placeholder="Pertanyaan" required></textarea>
        <button class="lg:w-[500px] w-[300px] h-[45px] lg:h-[60px] rounded-lg text-white bg-primary font-poppins_semibold mt-8">Kirim</button>
    </form>
</section>