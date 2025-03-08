<!doctype html>
<html class="hs">
<head>
    <title>MeatFLIX.id</title>
    <link rel="icon" type="image/x-icon" href="/images/drumstick-bite-solid.svg">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/resources/css/app.css">
    <style>
        .hs {
            -ms-overflow-style: none;  
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-black">
    <header>
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 -mt-2">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="fa-solid fa-drumstick-bite fa-flip text-5xl text-red-500" style="--fa-animation-duration: 2.5s;"></span>
                    <h1 class="font-sans text-5xl font-bold text-left text-red-500 italic select-none">
                        Meat <span class="text-3xl font-bold text-left text-white -ml-3">FLIX.id</span>
                    </h1>
                    
                </a>
            </div>
           
            </div>
        </nav>   
    </header>
    <div class="p-5 rounded-lg text-white ">
    <div class="row-span-4 p-5 rounded-lg">    
            <img src="{{$producers->profil}}" class="w-64 h-96 rounded-lg border-2 border-white hover:border-red-500" alt="producers">
            <h2 class="text-5xl font-bold mt-5">{{ $producers->name }}</h2>
            <h3 class="text-3xl font-bold mt-5">Tanggal Lahir: {{($producers->birthdate)}}</h3>
            <div>
            <h3 class="text-3xl font-bold mt-5 mb-5">Daftar Film {{($producers->name)}}</h3>
                    <ul class="list-disc list-inside">
                        @forelse($producers->movies as $movie)
                            <li class="mb-2 list-none">
                                <a href="{{ route('home')}}" class="text-red-500 hover:text-blue-500">
                                {{ $movie->title }}
                                </a>
                            </li>
                        @empty
                        <div class="flex items-center justify-center h-96 mt-20">
                        <h1 class="text-3xl font-bold text-white">Tidak ada data</h1>
                        </div>
                        @endforelse
                    </ul>
                </div>
            </div>
           
    </div>
    

        <footer class="bg-white shadow-sm dark:bg-gray-900 mt-20">
        <div class="w-full max-w-screen-xl mx-auto p-4 mt-10">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
        </div>
    </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>