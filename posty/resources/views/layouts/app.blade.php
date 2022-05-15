<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600&display=swap" rel="stylesheet">
<script src="../path/to/flowbite/dist/flowbite.js"></script>
<script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
<style>
    *{
font-family: 'Exo', sans-serif;
}
</style>
</head>
 <nav class="backdrop-blur-sm bg-wh¨LF%ZDS/.%AOKK.DLOOZ.ite  border-gray-200 px-32  p-4   mb-4  dark:bg-gray-800">
                        <div class=" container flex flex-wrap justify-between items-center mx-auto">
                        <a href="{{route('dashboard')}}" class="flex items-center">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_9PWAYd.json"  background="transparent"  speed="1"  style="width: 30px; height: 30px;"  loop  autoplay></lottie-player>
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">ShopLigne</span>
                        </a>
                        <div class="flex md:order-1">
                        <div class="hidden relative mr-3 md:mr-0 md:block">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        @include('partials.search')
                        </div>
                        <button data-collapse-toggle="mobile-menu-3" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-3" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                          </button>
                        </div>

                        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-2" id="mobile-menu-3">
                        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">

                        <li>
                            <a href="{{ route('dashboard')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            @auth
                            <a href="{{ route('posts')}}" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            @endauth
                        </li>
                    </ul>
                    <ul class="flex  item-center ">
                        <div class="ml-10">
                        @auth
                        <form action="{{ route('logout')}}" method="post" class="inline p-3">
                            @csrf
                            <a href="" >{{ auth()->user()->name}}</a>
                                <button type="submit" class="p-3">Logout</button>
                            </form>
                            </div>
                            @endauth
                            @guest
                            <li><a href="{{ route('register')}}" class="p-3">Register</a></li>
                            <li><a href="{{ route('login')}}" class="p-3">Login</a></li>
                            @endguest
                        </ul>
                        </div>
                        </div>
                        </nav>

<body class="bg-blue-500">

@yield('content')
<script src=" {{asset('js/app.js')}} "></script>

</body>
</html>




