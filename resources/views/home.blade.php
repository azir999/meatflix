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
             <!-- Modal toggle -->
            <div class="flex flex-row-reverse -mt-10">
            <button data-modal-target="login-modal" data-modal-toggle="login-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 -mt-5 mb-5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button">
            Masuk
            </button>
            </div>
        </nav>   
    </header>

    <div class="bg-gray-500 bg-[url(https://i.ibb.co.com/TD79G9tD/background-2.png)] bg-blend-multiply p-40 text-white">
        <div class="text-center text-5xl font-bold font-sans italic select-none">CHANGE YOUR LIFE WITH G.O.A.T MOVIES</div>
        <p class="text-3xl font-sans text-center font-bold not-italic select-none">
            Tontonlah movies terbaik dalam hidup anda dengan meatflix.id,</br>harga mulai dari Rp.14.000 / minggu diskon 50%
        </p>

       
        <div class="flex justify-center mt-10">
                <form action="{{ route('home') }}" method="GET">
                    <input class="placeholder:text-gray-500 placeholder:italic text-white bg-black p-2 border-2 rounded-lg" placeholder="Masukan Email Anda...." type="text">
                    <a href="{{url('https://www.netflix.com/signup/password?locale=id-ID')}}" type="submit" 
                            class="focus:outline-none text-white font-bold bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Kirim
                    </a>
                </form>
        </div>

        <!-- Main modal -->
        <div id="login-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Masuk ke admin meatflix.id
                        </h3>
                        <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="login-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                    @session('error')
                        <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800 mt-5" role="alert">
                        <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                        Email atau Password Kamu Salah!
                        </div>
                        </div>
                    @endsession
                        <form class="space-y-4" method="POST" action="{{ route('login.post') }}">
                        @csrf
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@gmail.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div class="flex justify-between">
                            <button type="submit" class="w-full focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Masuk</button>
                            </div>
                         </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="text-left mt-10 font-sans font-bold text-3xl"> 
    <h3 class="ml-10 text-white">G.O.A.T Movies & Series ></h3>
        </div>
        <div class="flex overflow-x-auto p-5 mt-5 space-x-4 hs">
            @foreach($movies as $movie)
            <div class="flex flex-col items-center m-2">
                <img 
                    class="w-64 h-96 rounded-lg border-2 border-white object-cover transition duration-300 hover:scale-95" 
                    src="{{ $movie->cover }}" 
                    alt="{{ $movie->title }} cover"
                />
                <!-- Modal toggle -->
                <button 
                    data-modal-target="info_modal_{{$movie->id}}" 
                    data-modal-toggle="info_modal_{{$movie->id}}" 
                    class="block w-64 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-6 py-2.5 text-center mt-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Info
                </button>
            </div>
              <!-- Main modal -->
            <div id="info_modal_{{$movie->id}}" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                              {{$movie->title}}
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="info_modal_{{$movie->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                       <div class="flex flex-col p-4 md:p-5 space-y-4">
                        <div class="flex ml-40 w-64 h-96 m-5">
                            <img class="w-full h-full object-cover rounded-lg" src="{{$movie->cover}}" alt="Movie Cover"/>
                        </div>
                        <div class="text-xl leading-relaxed text-white dark:text-gray-400 mt-5 text-justify">
                        Produser:
                            <a href="{{ route('producers.show', $movie->producers->id) }}" class="hover:text-red-500">
                            {{$movie->producers->name}}
                            </a>
                            </br> Crew: {{$movie->actor_actress}}
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                {{$movie->synopsis}}
                            </p>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
                @endforeach
        </div> 
        <footer class="bg-white shadow-sm dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 mt-10">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
        </div>
    </footer>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>