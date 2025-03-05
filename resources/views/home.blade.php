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
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="fa-solid fa-drumstick-bite fa-flip text-5xl text-red-500" style="--fa-animation-duration: 2.5s;"></span>
                    <h1 class="font-sans text-5xl font-bold text-left text-red-500 italic select-none">
                        Meat <span class="text-3xl font-bold text-left text-white -ml-3">FLIX.id</span>
                    </h1>
                </a>
            </div>
        </nav>   
    </header>

    <div class="bg-gray-500 bg-[url(https://i.ibb.co.com/TD79G9tD/background-2.png)] bg-blend-multiply p-40 text-white">
        <div class="text-center text-5xl font-bold font-sans italic select-none">CHANGE YOUR LIFE WITH G.O.A.T MOVIES</div>
        <p class="text-3xl font-sans text-center font-bold not-italic select-none">
            Tontonlah movies terbaik dalam hidup anda dengan meatflix.id,</br>harga mulai dari Rp.14.000 / minggu diskon 50%
        </p>
        <div class="flex justify-center mt-10">
        <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <a href="{{('/login')}}" class="focus:outline-none text-white font-bold bg-red-500 hover:bg-red-800 focus:ring-4 focus:ring-red-300 rounded-lg text-sm px-10 py-5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Masuk</a>      
        </div>
        </div>
    </div>

    <div class="text-left mt-5 font-sans font-bold text-3xl"> 
        <h3 class="ml-10 text-white">G.O.A.T Movies & Series ></h3>
        </div>
        <div class="flex p-5 mt-5 overflow-y-scroll hs">
        @foreach($movies as $movie)
                <img class="w-64 h-96 rounded-lg border-2 border-white m-2 object-cover transition-transform transform duration-300 hover:scale-95" src="{{$movie->cover}}"/>
        @endforeach
        </div> 
        <footer class="bg-white shadow-sm dark:bg-gray-900">
        <div class="w-full max-w-screen-xl mx-auto p-4 mt-10">
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 Meatflix.co.id All Rights Reserved.</span>
        </div>
    </footer>
    </div>
</body>
</html>