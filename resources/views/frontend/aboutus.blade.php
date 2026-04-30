@extends('frontend.layouts.app')

@section('title')
    {{ __('About Us') }}
@endsection

@section('content')
<section class="bg-white dark:bg-gray-800 text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-cover bg-center z-0" 
             style="background-image: url('{{ asset('img/Wallpaper/wallpapertugu.jpg') }}'); 
                    opacity: 0.4;">
        </div>
        <div class="container mx-auto flex px-5 py-20 items-center justify-center flex-col relative z-10">
            <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="{{ asset('img/JOGCARE1000.png') }}">
            <!-- <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white dark:text-white">About JogjaCare</h1>
                <p class="mb-8 leading-relaxed text-gray-800 dark:text-gray-300">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p>
            </div> -->
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 pt-20 items-center justify-center flex-col relative z-10">
            <!-- <img class="lg:w-2/12 md:w-3/12 w-5/12 mb-10 object-cover object-center rounded" alt="hero" src="{{ asset('img/JOGCARE1000.png') }}"> -->
            <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-blue-500">About JogjaCare</h1>
                <!-- <p class="mb-8 leading-relaxed text-gray-800 dark:text-gray-300">Meggings kinfolk echo park stumptown DIY, kale chips beard jianbing tousled. Chambray dreamcatcher trust fund, kitsch vice godard disrupt ramps hexagon mustache umami snackwave tilde chillwave ugh. Pour-over meditation PBR&amp;B pickled ennui celiac mlkshk freegan photo booth af fingerstache pitchfork.</p> -->
            </div>
        </div>
        <div class="container py-4 mx-auto">
            <div class="px-24 w-full mx-auto text-center">
            <!-- <p class="leading-relaxed text-lg">JogjaCare is the latest innovation in Yogyakarta's tourism landscape, combining healthcare excellence with the city's cultural charm. As a health tourism platform, JogjaCare bridges the gap between tourists looking for a unique holiday experience and the quality health facilities available in Student City.
            This website is here as a comprehensive solution for those who want to use their vacation not only to relax, but also to improve their health and fitness. By leveraging Yogyakarta's reputation as a popular tourist destination and the development of its health infrastructure, JogjaCare offers a holistic tourism experience.
            <br><br>Through an intuitive interface, website visitors can explore a variety of healthcare options, from routine check-ups to more complex medical procedures. JogjaCare not only provides information about leading hospitals and clinics in Yogyakarta, but also helps tourists in planning their trips by offering packages that combine medical care with cultural exploration.
            JogjaCare's uniqueness lies in its ability to integrate health aspects with the rich culture of Yogyakarta. Visitors can find recommendations for suitable tourist attractions to visit between their treatment schedules, ensuring that their trip not only benefits their health, but also enriches their cultural insight.
            <br><br>With JogjaCare, Yogyakarta positions itself as a promising health tourism destination in Indonesia. This platform not only supports the development of the local tourism industry, but also contributes to improving health services in the area. Through collaboration between the tourism and health sectors, JogjaCare creates a mutually beneficial ecosystem, encouraging economic growth and improving service standards in both sectors.
            As a pioneer in its field, JogjaCare is paving the way for the development of health tourism in Indonesia, demonstrating the great potential this country has in attracting international medical tourists. By prioritizing service quality and local wisdom, JogjaCare is not only an information portal, but also an ambassador for the excellence of health services and friendly culture of Yogyakarta.</p> -->
            <p class="leading-relaxed text-lg dark:text-gray-100">JogjaCare is the latest innovation in Yogyakarta's tourism landscape, combining healthcare excellence with the city's cultural charm. As a health tourism platform, JogjaCare bridges the gap between tourists looking for a unique holiday experience and the quality health facilities available in Student City.
            This website is here as a comprehensive solution for those of you who want to use your vacation not only to relax, but also to improve your health and fitness. By leveraging Yogyakarta's reputation as a popular tourist destination and the development of its health infrastructure, JogjaCare offers a holistic tourism experience.
            <br><br>JogjaCare not only provides information about leading hospitals and clinics in Yogyakarta, but also helps tourists in planning their trips by offering packages that combine medical care with tourist exploration.
            JogjaCare's uniqueness lies in its ability to integrate health aspects with the rich culture of Yogyakarta. Visitors can find recommendations for suitable tourist attractions to visit between their treatment schedules, ensuring their trip not only benefits their health, but also enriches their cultural insight.
            <br><br>With JogjaCare, Yogyakarta is positioning itself as a promising health tourism destination in Indonesia. This platform not only supports the development of the local tourism industry, but also contributes to improving health services in the area. Through collaboration between the tourism and health sectors, JogjaCare creates a mutually beneficial ecosystem, and as a pioneer in its field, JogjaCare paves the way for the development of health tourism in Indonesia, showing the country's enormous potential in attracting international medical tourists. By prioritizing service quality and local wisdom, JogjaCare is not only an information portal, but also an ambassador for health service excellence and Yogyakarta's friendly culture.</p>
            <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-8 mb-6"></span>
            <h2 class="text-gray-900 dark:text-white dark:text-white font-medium title-font tracking-wider text-sm mb-20">JogjaCare's Team</h2>
            </div>
        </div>
    </section>

    <section class="bg-blue-100 text-gray-600 body-font dark:bg-gray-700 dark:text-gray-400 overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-12">
            <div class="p-12 md:w-1/2 flex flex-col items-start">
                <span class="inline-block py-1 px-2 mb-4 rounded bg-blue-500 text-white text-xs font-medium tracking-widest">Our Vision</span>
                <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 dark:text-white dark:text-white mt-4 mb-4">"To be the leading platform connecting tourists with quality health services in Yogyakarta, combining the cultural beauty and friendliness of the city with modern medical care."
                    <br><br>This vision includes several important aspects:</h2>
                <p class="leading-relaxed mb-8 dark:text-gray-300">1. Position as the main platform for health tourism
                <br> 2. Focus on Yogyakarta as a destination
                <br> 3. Emphasis on the quality of health services
                <br> 4. Integration between tourism and medical care
                <br> 5. Highlighting the unique culture and hospitality of Yogyakarta</p>
            </div>
            <div class="p-12 md:w-1/2 flex flex-col items-start">
                <span class="inline-block py-1 px-2 mb-4 rounded bg-blue-500 text-white text-xs font-medium tracking-widest">Our Mission</span>
                <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 dark:text-white dark:text-white mt-4 mb-4">"To be a trusted bridge connecting tourists with quality health services in Yogyakarta, while promoting the cultural richness and natural beauty of this area."
                    <br><br>This mission includes several important aspects:</h2>
                <p class="leading-relaxed mb-8 dark:text-gray-300"> 1. Connecting tourists with health services
                <br> 2. Guarantee the quality of the services offered
                <br> 3. Promote Yogyakarta as a health tourism destination
                <br> 4. Combining health aspects with culture and style</p>
            </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800 text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-blue-500">MEET OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base dark:text-gray-200">At JogjaCare, we have a team of professionals dedicated to providing the best health experience for you. Carefully selected to combine the latest medical expertise with typical Jogja hospitality.</p>
        </div>
        <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/5 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="img/profile/luthfi.jpg">
            <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900 dark:text-white">M. Luthfi Abdillah</h2>
                <h3 class="text-gray-500 dark:text-gray-300 mb-3">Programmer</h3>
                <p class="mb-4 px-2 dark:text-gray-100">"Never give up on your dreams. They're what make life fun."</p>
                <span class="inline-flex">
                <a class="text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </div>
        <div class="p-4 lg:w-1/5 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="img/profile/zefila.jpg">
            <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900 dark:text-white">Zefilla Ardya Salsabila</h2>
                <h3 class="text-gray-500 dark:text-gray-300 mb-3">Content Writer</h3>
                <p class="mb-10 px-2 dark:text-gray-100">"It's not how long, but how well you live that counts"</p>
                <span class="inline-flex">
                <a class="text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </div>
        <div class="p-4 lg:w-1/5 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="img/profile/alya.jpg">
            <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900 dark:text-white">Karisma Alya Septiana</h2>
                <h3 class="text-gray-500 dark:text-gray-300 mb-3">Project Manager</h3>
                <p class="mb-10 px-2 dark:text-gray-100">"Every day is a new opportunity to get better."</p>
                <span class="inline-flex">
                <a class="text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </div>
        <div class="p-4 lg:w-1/5 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="img/profile/haikal.jpg">
            <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900 dark:text-white">Ahmad Haikal Naser</h2>
                <h3 class="text-gray-500 dark:text-gray-300 mb-3">Data Analyst</h3>
                <p class="mb-4 dark:text-gray-100">"Success is not the end of the journey, but the beginning of a greater adventure."</p>
                <span class="inline-flex">
                <a class="text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </div>
        <div class="p-4 lg:w-1/5 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
            <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="img/profile/syahrur.jpg">
            <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900 dark:text-white">Syahrur Ramadhan</h2>
                <h3 class="text-gray-500 dark:text-gray-300 mb-3">Quality Assurance (QA) Tester</h3>
                <p class="mb-4 dark:text-gray-100">"Failure is not defined in the dictionary of life; it is just quitting up too soon."</p>
                <span class="inline-flex">
                <a class="text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-2 text-gray-500 dark:text-gray-300">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                </a>
                </span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
@endsection
