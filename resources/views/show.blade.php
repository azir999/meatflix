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
            <div class="flex flex-row-reverse -mt-15">
            <a href="{{ route('home') }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                Balik
            </a>
            </div>
        </nav>   
    </header>

    <!-- MAIN GRID -->
    <div class="grid grid-cols-2 bg-gray-800 m-10 p-5 rounded-lg">
        <!-- SUBGRID 1 -->
        <div class="bg-gray-700 row-span-4 p-5">
            <div class="flex justify-center">
                <img src="{{$producers->profil}}" class="w-64 h-96 rounded-lg border-2 border-white hover:border-red-500" alt="Producers Profile">
            </div>
        </div>
        <!-- SUBGRID 2 -->
        <div class="bg-gray-700 row-span-4 p-5 grid text-white">
            <h1 class="text-5xl font-bold">{{$producers->name}}</h1>
            <h2 class="text-3xl font-bold">{{$producers->birthdate}}</h2>
            <h3>
                Movies: <br>
                <ul class="list-disc list-inside">
                    @foreach($producers->movies as $movie)
                        <li class="mb-2 list-none">
                                <a href="#" data-modal-target="info_modal_{{$movie->id}}" data-modal-toggle="info_modal_{{$movie->id}}" class="text-red-500 hover:text-blue-500">
                                    {{ $movie->title }}
                                </a>
                                <div class="flex">
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
                                                    <div class="flex justify-center w-64 h-96 m-5">
                                                        <img class="w-full h-full object-cover rounded-lg" src="{{$movie->cover}}" alt="Movie Cover"/>
                                                    </div>
                                                    <div class="text-xl leading-relaxed text-white dark:text-gray-400 mt-5 text-justify">
                                                        Produser:
                                                        <a href="{{ route('producers.show', $movie->producers->id) }}" class="hover:text-red-500">
                                                            {{$movie->producers->name}}
                                                        </a>
                                                        <br> Crew: {{$movie->actor_actress}}
                                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                                            {{$movie->synopsis}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </h3>
        </div>
    </div>       

    <footer class="bg-white shadow-sm dark:bg-gray-900 mt-20">
        <div class="w-full max-w-screen-xl mx-auto p-4 mt-10">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>