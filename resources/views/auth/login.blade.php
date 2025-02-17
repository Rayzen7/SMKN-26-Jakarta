<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="w-full h-[100vh] bg-center bg-no-repeat object-cover bg-cover flex flex-col justify-center items-center"
    style="background-image: url({{ asset('img/school/smk.png') }})">
        <div class="bg-white p-6 rounded-lg w-[450px] h-[500px] flex flex-col justify-center items-center">
            <div class="text-center">
                <h1 class="text-[32px] font-poppins_semibold text-primary">Masuk</h1>
                <p class="text-[14px] font-poppins_medium w-[250px]">Masukkan Email dan Password dengan benar</p>
            </div>
            <form action="{{ route('login.login') }}" method="POST" class="flex flex-col justify-center items-center mt-12 gap-8">
                @csrf
                <div class="group">
                    <div class="flex justify-center items-center gap-2 group">
                        <svg class="w-[30px] h-[30px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 8.66666C10 11.9747 12.692 14.6667 16 14.6667C19.308 14.6667 22 11.9747 22 8.66666C22 5.35866 19.308 2.66666 16 2.66666C12.692 2.66666 10 5.35866 10 8.66666ZM26.6667 28H28V26.6667C28 21.5213 23.812 17.3333 18.6667 17.3333H13.3333C8.18667 17.3333 4 21.5213 4 26.6667V28H26.6667Z" class=" fill-black group-focus-within:fill-primary"/>
                        </svg>                        
                        <input type="email" name="email" class="w-[250px] h-[45px] outline-none pl-3 text-[14px] font-poppins_medium" placeholder="Email" required>
                    </div>
                    <hr class="w-[300px] h-[2px] group-focus-within:bg-primary outline-none border-none bg-black mt-1"/>
                </div>
                <div class="group">
                    <div class="flex justify-center items-center gap-2 group">
                        <svg class="w-[30px] h-[30px]" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.40506 21.976L5.01112 24.7303C4.98677 24.9012 5.00254 25.0755 5.05718 25.2393C5.11182 25.4031 5.20384 25.552 5.32594 25.6741C5.44804 25.7962 5.59688 25.8882 5.76069 25.9428C5.92449 25.9975 6.09877 26.0132 6.26972 25.9889L9.02396 25.5949C9.44127 25.536 10.4873 22.7272 10.4873 22.7272C10.4873 22.7272 11.0126 23.1779 11.2273 23.2458C11.6858 23.3904 12.1321 22.9409 12.2823 22.4846L12.713 20.5127C12.713 20.5127 13.3551 20.8376 13.5876 20.8855C13.8837 20.9467 14.1708 20.7642 14.3744 20.5594C14.4967 20.4375 14.5886 20.2884 14.6426 20.1243L14.9386 18.287C14.9386 18.287 15.6898 18.4951 15.9468 18.5252C16.2395 18.5586 16.5244 18.4094 16.7336 18.1991L18 16.9338C19.072 17.2812 20.219 17.326 21.3148 17.0633C22.4107 16.8006 23.4127 16.2406 24.2107 15.4449C25.3565 14.2961 26 12.7397 26 11.1171C26 9.49453 25.3565 7.93817 24.2107 6.78934C23.0618 5.64349 21.5055 5 19.8829 5C18.2603 5 16.7039 5.64349 15.5551 6.78934C14.7592 7.58715 14.1991 8.58921 13.9363 9.68507C13.6736 10.7809 13.7185 11.9281 14.0662 13L5.71887 21.3462C5.54849 21.5164 5.43831 21.7375 5.40506 21.976ZM22.1764 8.82359C22.7835 9.43249 23.1244 10.2573 23.1244 11.1171C23.1244 11.977 22.7835 12.8017 22.1764 13.4106L17.5894 8.82359C18.1983 8.21648 19.023 7.87555 19.8829 7.87555C20.7427 7.87555 21.5675 8.21648 22.1764 8.82359Z" class=" fill-black group-focus-within:fill-primary"/>
                        </svg>                                                
                        <input type="password" name="password" class="w-[250px] h-[45px] outline-none pl-3 text-[14px] font-poppins_medium" placeholder="Password" required>
                    </div>
                    <hr class="w-[300px] h-[2px] group-focus-within:bg-primary outline-none border-none bg-black mt-1"/>
                </div>
                <button type="submit" class="text-white font-poppins_semibold bg-primary w-full rounded-lg h-[45px] cursor-pointer mt-8">
                    Masuk
                </button>
            </form>
            <p class="text-[14px] font-poppins_medium mt-2">Bukan Admin? <a href="/" class="underline italic text-primary mt-2">Masuk</a></p>
        </div>
    </section>
</body>
</html>