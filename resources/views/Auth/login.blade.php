<!doctype html>
<html class="hs">
<head>
    <title>MeatFLIX.id</title>
    <link rel="icon" type="image/x-icon" href="/images/drumstick-bite-solid.svg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        .hs {
            -ms-overflow-style: none;  
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-black text-white">
<header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="fa-solid fa-drumstick-bite fa-flip text-5xl text-red-500" style="--fa-animation-duration: 2.5s;"></span>
            <span class="self-center text-2xl font-semibold whitespace-nowrap"><h1 class="font-sans text-5xl font-bold text-left text-red-500 italic select-none">
                Meat 
            <span class="text-3xl font-bold text-left text-white -ml-3">FLIX.id</span>
            </h1></span>
        </a>
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <div>
                <a href="{{url('/')}}" class="bg-red-500 hover:bg-red-800 hover:text-black text-2xl font-bold p-1 text-white rounded-sm absolute top-4 right-3 select-none">Balik</a>
            </div>
        </div>
        </nav>   
</header>
    <div class="flex justify-center mt-40 mb-10">
        <div class="inline-block bg-gray-900 p-5 border-2 rounded-lg"> 
            <div class="text-center">
            <form method="POST" action="{{ route('login.post') }}">
            @csrf
            @session('error')
                  <div class="alert alert-danger" role="alert"> 
                      {{ $value }}
                  </div>
              @endsession
                <h1>Selamat datang admin di meatflix.id, silakan login terlebih dahulu</h1>
                <input class="placeholder:text-gray-500 placeholder:italic text-white bg-black p-1 border-2 rounded-lg mt-10" type="email" name="email" id="email" placeholder="email"><br>
                <input class="placeholder:text-gray-500 placeholder:italic text-white bg-black p-1 border-2 rounded-lg mt-10" type="password" name="password" id="password" placeholder="Password"><br>
                <button class="bg-red-500 hover:bg-red-800 hover:text-black text-white p-1 font-bold rounded-lg mt-10" type="submit">Login</button>
            </form>
            </div>
        </div>
    </div>
    <footer class="bg-white shadow-sm dark:bg-gray-900 mt-40">
    <div class="w-full max-w-screen-xl mx-auto p-4">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
    </div>
</footer>
</body>
</html>