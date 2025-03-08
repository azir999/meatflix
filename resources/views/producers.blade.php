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
<body class="bg-black">
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
            <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="{{('images/user.png')}}" alt="user photo">
            </button>
            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                <div class="px-4 py-3">
                <span class="block text-sm text-gray-900 dark:text-white"></span>
                <span class="block text-sm  text-gray-500 truncate dark:text-gray-400"></span>
                </div>
                <ul class="py-2" aria-labelledby="user-menu-button">
                <li>
                    <a href="{{url('admin')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Movies</a>
                </li>
                <li>
                    <a href="{{url('producers')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Producers</a>
                </li>
                <li>
                    <a href="{{url('/')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
                </li>
                </ul>
            </div>
        </div>
        </div>
        </nav>   
</header>
<div class="flex flex-cols-3 gap-4 bg-gray-800 m-10 -mb-8 p-5 rounded-lg">
            <!-- SUBGRID 1 -->
            <div class="flex-none row-span-4">
                <form action="{{ route('producers.index') }}" method="GET">
                    <input class="placeholder:text-gray-500 placeholder:italic text-white bg-black p-2 border-2 rounded-lg" placeholder="Telusuri Produser anda...." type="text" name="query" value="{{ request('query') }}">
                    <button type="submit" 
                            class="focus:outline-none text-white font-bold bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-5 py-3 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Telusuri
                    </button>
                </form>
            </div>
            <!-- SUBGRID 2 -->
            <div class="flex-auto row-span-4">
              <!-- kosong -->
            </div>
            <!-- SUBGRID 3 -->

            <div class="flex-none row-span-4">
                <button type="button" 
                        data-modal-target="tambah_modal" 
                        data-modal-toggle="tambah_modal" 
                        class="focus:outline-none text-white font-bold bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Tambah
                </button>
    <!-- Main modal Tambah-->
  <div id="tambah_modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Menu tambah</h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="tambah_modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                 
                <form action="{{ route('producers.store') }}" class="max-w-sm mx-auto mt-5" method="POST">
                    @csrf
                    <div class="mb-5 form-group">
                            <label for="profil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Profil</label>
                            <input type="text" id="profil" name="profil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="Masukan Link Cover" required>
                        </div>
                        
                        <div class="mb-5 form-group">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="name" id="name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="Masukan Judul"  required />
                        </div>

                        <div class="mb-5 form-group">
                            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                            <input type="date" name="birthdate" id="birthdate" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" placeholder="Masukan Producer"  required />
                        </div>
                    
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 mt-5">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text -center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                        <button data-modal-hide="tambah_modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
            </div>
        </div>
                
@forelse($producers as $producer)
        <!-- MAIN GRID -->
        <div class="grid grid-cols-3 gap-4 bg-gray-800 m-10 p-5 border-2 border-gray-200 rounded-lg">
            <!-- SUBGRID 1 -->
            <div class="bg-gray-700 row-span-4 p-5 rounded-lg">
                <div class="flex justify-center">
                <img src="{{$producer->profil}}" class="w-64 h-96 rounded-lg border-2 border-white hover:border-red-500" alt="producers">
                </div>
            </div>
            <!-- SUBGRID 2 -->
            <div class="bg-gray-700 row-span-4 p-5 rounded-lg grid text-white">
                <h1 class="text-5xl font-bold">Id Producer: {{$producer->id}}</h1>
                <h2 class="text-5xl font-bold">Nama: {{$producer->name}}</h2>
                <h3 class="text-3xl font-bold">Tanggal Lahir: {{$producer->birthdate}}</h3>
            </div>
            <!-- SUBGRID 3 -->
            <div class="flex flex-col bg-gray-700 row-span-4 p-5 rounded-lg text-white items-center justify-center">
                <button type="button" data-modal-target="edit_modal_{{$producer->id}}" data-modal-toggle="edit_modal_{{$producer->id}}" class="text-white font-bold bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</button>            
            <!-- Main modal Edit-->
            <div id="edit_modal_{{$producer->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Menu edit</h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit_modal_{{$producer->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form action="{{ route('producers.update', $producer->id) }}" class="max-w-sm mx-auto mt-5" method="POST">
                        @csrf
                        <div class="mb-5 form-group">
                            <label for="profil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Profil</label>
                            <input type="text" id="profil" name="profil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" value="{{ old('profil', $producer->profil) }}" required>
                        </div>
                        
                        <div class="mb-5 form-group">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="name" id="name" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" value="{{ old('name', $producer->name) }}"  required />
                        </div>

                        <div class="mb-5 form-group">
                            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                            <input type="date" name="birthdate" id="birthdate" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light"  required />
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600 mt-5">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                            <button data-modal-hide="edit_modal_{{$producer->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    
    <div id="delete_modal_{{$producer->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="delete_modal_{{$producer->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu yakin ingin menghapus ini?</h3>
                    <form action="{{ route('producers.destroy', $producer->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button data-modal-hide="delete_modal_{{$producer->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Iya
                        </button>
                        <button data-modal-hide="delete_modal_{{$producer->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" >
                            Tidak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <button type="button" data-modal-target="delete_modal_{{$producer->id}}" data-modal-toggle="delete_modal_{{$producer->id}}" class="focus:outline-none text-white font-bold bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                </div>
        </div>
        @empty
        <div class="flex items-center justify-center h-96 mt-20">
            <h1 class="text-3xl font-bold text-white">Tidak ada data</h1>
        </div>
    @endforelse
</body>
<footer class="bg-white shadow-sm dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4">
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</html>