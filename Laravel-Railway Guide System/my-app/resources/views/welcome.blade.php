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
                        <li><a href="{{ url('#about') }}" class="hover:underline">About</a></li>
                        <li><a href="#contact" class="hover:underline">Contact</a></li>
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


            <main class="container mx-auto py-8">
                <section class="text-center">
                    <h2 class="text-3xl font-bold mb-4">Guiding Your Journey Beyond Tracks</h2>
                    <p class="text-wrap font-bold mb-4 text-xl">Welcome to Railway Tourism Adventure </p>
                    <p class="text-gray-700  mx-80 text-center normal-case "> Embark on a journey where train tracks echo exploration. Our guide promises opulent carriages and breathtaking landscapes. Picture winding through mountains, gliding past villages steeped in history. From Swiss Alps to Napa Valley, comfort meets discovery. Whether seasoned or novice, there's magic aboard. Join us for unforgettable moments, where the journey is as enchanting as destinations. Sit back, relax, and let the rhythmic sway carry you to new horizons. Adventure awaits.</p>
            
            </main>    


            <section class="intro bg-gray-200 py-8">
                <div class="grid grid-cols-3 gap-4 text-center  ">
                <div class="bg-white p-6 rounded shadow-md transform hover:scale-90 motion-reduce:transform-none">
                    <div class="my-9 pt-9 h-70 w-80 mx-auto block rounded-full" >
                        <img class="h-96 w-full"src="https://i.pinimg.com/564x/79/28/ff/7928ff40f0cefa99a4bdbc5e4ade9636.jpg" >
                        <p>Embark on an enchanting railway tour in Sri Lanka, traversing through captivating landscapes and historic routes. The Sri Lankan railway network offers a remarkable journey, showcasing the island's diverse beauty. From the bustling city of Colombo to the lush tea plantations of Nuwara Eliya, each destination along the railway route unveils unique charms and cultural treasures. Experience the cool mountain air as you ascend to breathtaking heights, passing verdant valleys and cascading waterfalls. Marvel at colonial-era architecture and immerse yourself in the rich history of the railway system, which has been an integral part of Sri Lanka's heritage for over a century.</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded shadow-md  transform hover:scale-90 motion-reduce:transform-none">
                    <div class="my-9 pt-9 h-70 w-80 mx-auto block rounded-full" >
                        <img src="https://i.pinimg.com/564x/06/c8/f5/06c8f5d39e0cd88d6103f0a9f0ed0b81.jpg">
                        <p>One of the highlights of any visit to Nuwara Eliya is experiencing the breathtaking train journey through the picturesque landscapes of the Sri Lankan hill country. The Nuwara Eliya train location offers travelers the opportunity to embark on this unforgettable adventure aboard the iconic blue train. Departing from the historic Nuwara Eliya Railway Station, this scenic route takes you through lush tea plantations, misty mountains, and cascading waterfalls, providing panoramic views that will leave you in awe. As the train winds its way through tunnels and over bridges, you'll have the chance to witness the beauty of nature up close while enjoying the comfort of your seat. Whether you're a railway enthusiast or simply seeking an unforgettable travel experience, the Nuwara Eliya train journey is not to be missed</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded shadow-md  transform hover:scale-90 motion-reduce:transform-none">
                    <div class="my-9 pt-9 h-70 w-80  mx-auto block rounded-full" >
                        <img class="h-96 w-full" src="https://i.pinimg.com/564x/f6/7e/32/f67e32fb152c85ef82ebfe855ccf3b38.jpg" >
                            <p>
                                Explore Sri Lanka's scenic railway network, a journey that unveils the island's diverse beauty. From bustling Colombo to the misty hills of Ella, each stop offers unique experiences. Admire verdant tea plantations, majestic waterfalls, and colonial-era architecture. Feel the cool mountain breeze as you ascend to breathtaking heights, 
                                traversing over iconic bridges and through picturesque tunnels. Immerse yourself in the rich history of the railway, an integral part of Sri Lanka's heritage for over a century. Whether you're a railway enthusiast or a nature lover, the Sri Lankan railway promises an unforgettable adventure through stunning landscapes and cultural heritage.
                            </p>
                    </div>
                </div>
                </div>
            </div>  
         </section>   







         <section id='about' class="bg-gray-100">
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <div class="max-w-lg">
                        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                        <p class="mt-4 text-gray-600 text-lg">Welcome to our railway website, your one-stop destination for all things related to rail travel. Here you'll find comprehensive information about our railway services, including schedules, ticketing, destinations, and more. Whether you're a commuter or a tourist, we strive to provide you with a seamless and enjoyable experience from start to finish.

                            Our railway network is designed to connect you to key locations efficiently and comfortably. Explore our routes and services to discover how we can help you reach your destination conveniently. From high-speed trains to scenic routes, we offer diverse options to suit every traveler's needs.
                            
                            At Railway Guide Pro, we prioritize safety, reliability, and customer satisfaction. Our team is dedicated to ensuring that your journey with us is not only smooth but also memorable. Feel free to browse our website for the latest updates, promotions, and travel tips.
                            
                            Join us on a journey of discovery and convenience. Let Railway Guide Pro be your preferred choice for traveling by rail. Whether you're traveling for business or pleasure, we're here to make your experience exceptional.</p>
                        <div class="mt-8">
                            <a href="#" class="text-blue-500 hover:text-blue-600 font-medium">Learn more about us
                                <span class="ml-2">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <img src="https://images.unsplash.com/photo-1531973576160-7125cd663d86" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                    </div>
                </div>
            </div>
        </section>


        <section id="contact" class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
                <div
                    class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                    <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0"
                        marginwidth="0" scrolling="no"
                        src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                        style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                    <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                        <div class="lg:w-1/2 px-6">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                            <p class="mt-1">Photo booth tattooed prism, portland taiyaki hoodie neutra typewriter</p>
                        </div>
                        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                            <a class="text-red-500 leading-relaxed">piyumi@email.com</a>
                            <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                            <p class="leading-relaxed">123-456-7890</p>
                        </div>
                    </div>
                </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                    <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe
                    </p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    <button class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Button</button>
                    <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral
                        artisan.</p>
                </div>
            </div>
        </section>



            <footer class="bg-blue-600 text-white py-8  bottom-0 left-0 w-full">
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




















