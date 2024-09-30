<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rail Guide Pro</title>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>      
            <header class="bg-blue-600 text-white py-4 w-full">
                <div class="container mx-auto flex justify-between items-center">
                    <h1 class="text-2xl font-bold"> Rail Guide Pro</h1>
                    <nav>
                        <ul class="flex space-x-4">
                            <li><a href="/Home" class="hover:underline">Home</a></li> 
                            <li><a href="{{ url('/search/shedule') }}" class="hover:underline">Train & Shedule</a></li>
                            <li><a href="{{ url('/card') }}" class="hover:underline">About</a></li>
                            <li><a href="/Contact" class="hover:underline">Contact</a></li>
                            <li>
                                @if (Route::has('login'))
                                    <div>
                                        @auth
                                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}">Log in</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>


            <div>
                @yield('content')
            </div>

                        
            <footer class="bg-blue-600 text-white py-8 bottom-0 left-0 w-full">
                <div class="container mx-auto flex flex-wrap justify-center md:justify-between">
                    <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                        <h3 class="text-xl mb-4">About Us</h3>
                        <p class="text-sm">Explore the world by train with Railway Tourism Guide. We provide information, tips, and guides for your railway adventures.</p>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                        <h3 class="text-xl mb-4">Contact Us</h3>
                        <ul class="text-sm">
                            <li>Email: info@railwaytourismguide.com</li>
                            <li>Phone: +1 (123) 456-7890</li>
                            <li>Address: 123 Railway St, Cityville, Country</li>
                        </ul>
                    </div>
                    <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                        <h3 class="text-xl mb-4">Follow Us</h3>
                        <ul class="text-sm">
                            <li><a href="#" class="hover:text-gray-300">Facebook</a></li>
                            <li><a href="#" class="hover:text-gray-300">Twitter</a></li>
                            <li><a href="#" class="hover:text-gray-300">Instagram</a></li>
                            <li><a href="#" class="hover:text-gray-300">YouTube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="text-center mt-8">
                    <p>&copy; 2024 Railway Tourism Guide | All rights reserved</p>
                </div>
            </footer>
            
            
    </body>
</html>
