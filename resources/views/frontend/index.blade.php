@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
<section class="bg-white dark:bg-gray-800 relative">
        <div class="absolute inset-0 bg-cover bg-center z-0" 
            style="background-image: url('{{ asset('img/Wallpaper/wallpaperprambanan1.jpg') }}');
                    opacity: 0.4;">
        </div>
        <div class="mx-auto max-w-screen-xl px-4 py-24 text-center sm:px-12 relative z-10">
            <div class="m-4 flex justify-center">
                <img class="h-24 rounded" src="{{ asset('img/logo-square.jpg') }}" alt="{{ app_name() }}">
            </div>
            <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-gray-900 dark:text-white sm:text-6xl">
                {{ app_name() }}
            </h1>
            <p class="mb-6 text-lg font-normal text-gray-900 dark:text-gray-300 sm:px-16 sm:text-2xl xl:px-48">
                {!! setting('app_description') !!}
            </p>
            <div class="mb-4 flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-x-4 sm:space-y-0 lg:mb-16">
                <a class="inline-flex items-center justify-center rounded-lg border-0 bg-blue-500 px-5 py-3 text-center text-base font-medium text-white hover:bg-blue-600"
                    href="{{ route('frontend.aboutus') }}">
                    Read more
                </a>
            </div>

            @include('frontend.includes.messages')
        </div>
    </section>

    <section class="bg-blue-100 text-gray-600 body-font dark:bg-gray-700 dark:text-gray-400">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded animate-smooth-bounce" alt="hero" src="{{ asset('img/asset/Medical-care.png') }}">
            </div>
            <div class="animate-description lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Medical Cares
                </h1>
                <p class="mb-8 leading-relaxed">Medical Care is a health service that focuses on providing the best and professional medical care. Our vision is to provide the most trusted and reputable hospital in the community. Our mission is to improve the quality of health services by using the latest technology and increasing public health awareness.</p>
                <div class="flex justify-center">
                    <a class="inline-flex text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" href="{{ route('frontend.medicalcares.index') }}">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800 text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="animate-description lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Medical Points
                </h1>
                <p class="mb-8 leading-relaxed dark:text-gray-400">Medical Point is a hospital that focuses on providing the best and professional health services. Our vision is to become the most trusted hospital and have a good reputation in the community. Our mission is to improve the quality of health services by using the latest technology and increasing public health awareness.</p>
                <div class="flex justify-center">
                    <a class="inline-flex text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" href="{{ route('frontend.medicalpoints.index') }}">Read more</a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded animate-smooth-bounce" alt="hero" src="{{ asset('img/asset/Medical-point.png') }}">
            </div>
        </div>
    </section>

    <section class="bg-blue-100 text-gray-600 body-font dark:bg-gray-700 dark:text-gray-400">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded animate-smooth-bounce" alt="hero" src="{{ asset('img/asset/Medical-center.png') }}">
            </div>
            <div class="animate-description lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Medical Centers
                </h1>
                <p class="mb-8 leading-relaxed">Hospitals and Medical Centers function as medical information centers as a reference in planning patient care and also as documentation of communication between patients, health service providers and professionals who contribute to patient care. The aim of improving the quality of Hospitals and Medical Centers is to ensure documentation of compliance with institutional, professional and government regulations.</p>
                <div class="flex justify-center">
                    <a class="inline-flex text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" href="{{ route('frontend.medicalcenters.index') }}">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800 text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="animate-description lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Medical Costs
                </h1>
                <p class="mb-8 leading-relaxed dark:text-gray-400">Medical Costs are costs incurred by patients to obtain health services provided by hospitals or clinics. These costs can include treatment costs, drug costs, examination costs, and other costs related to health services. Treatment costs can include hospitalization costs, surgery costs, examination costs, and others.</p>
                <div class="flex justify-center">
                    <a class="inline-flex text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" href="{{ route('frontend.medicalcosts.index') }}">Read more</a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded animate-smooth-bounce" alt="hero" src="{{ asset('img/asset/Medical-cost.png') }}">
            </div>
        </div>
    </section>

    <section class="bg-blue-100 text-gray-600 body-font dark:bg-gray-700 dark:text-gray-400">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded animate-smooth-bounce" alt="hero" src="{{ asset('img/asset/Medical-alter.png') }}">
            </div>
            <div class="animate-description lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900 dark:text-white">Medical Alternative
                </h1>
                <p class="mb-8 leading-relaxed">Traditional medicine is a medical service that has been used for a long time and is based on traditional knowledge. This service uses natural medicines, such as herbs, and traditional treatment methods, such as acupuncture and moxibustion. Traditional medicine is very popular in several countries, especially in Asia, because it is considered more effective and safer than conventional medicines.</p>
                <div class="flex justify-center">
                    <a class="inline-flex text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-600 rounded text-lg" href="{{ route('frontend.medicalalters.index') }}">Read more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-800 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 dark:text-white">Recommended Destinations</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base dark:text-gray-400">JogjaCare presents the best health tourism destination, which offers the perfect combination of quality medical care and a refreshing holiday experience in the Cultural City of Yogyakarta</p>
            </div>
            <div class="flex flex-wrap -m-4">
            @foreach([
                ['title' => 'Gamplong Studio Alam', 'description' => 'Studio Alam Gamplong, located in Sleman, is a former sugarcane plantation that was converted into an educational and cinema attraction.', 'map' => 'https://maps.app.goo.gl/osSN6zjAZVFvnGAk8', 'image' => 'img/destinasi/1.jpg'],
                ['title' => 'HeHa Sky View', 'description' => 'HeHa Sky View is a combination restaurant, cafe and amusement park that offers a beautiful view of Yogyakarta from the top of the hills.', 'map' => 'https://maps.app.goo.gl/j9xn28E99PYWELK79', 'image' => 'img/destinasi/2.jpg'],
                ['title' => 'Gembira Loka Zoo', 'description' => 'Gembira Loka Zoo is located in the city of Yogyakarta. The zoo is easily accessible by private vehicle or public transportation.', 'map' => 'https://maps.app.goo.gl/haE5qUt46qkV22jUA', 'image' => 'img/destinasi/3.jpeg'],
                ['title' => 'Merapi Park', 'description' => 'Merapi Park is located in Sleman. It is right at the foot of Mount Merapi, so it offers beautiful mountain views.', 'map' => 'https://maps.app.goo.gl/KfLwXFFHtZuhi2ndA', 'image' => 'img/destinasi/4.jpg'],
                ['title' => 'Candi Prambanan', 'description' => 'Prambanan Temple is located in Sleman. The largest Hindu temple in Indonesia is located on the border between Yogyakarta and Solo.', 'map' => 'https://maps.app.goo.gl/e5rbJu2rHQeWkeAx8', 'image' => 'img/destinasi/5.jpg'],
                ['title' => 'Bukit Pengilon', 'description' => 'Pengilon Hill, located in Gunung Kidul, offers a panoramic view of green hills, blue southern sea, and exotic corals.', 'map' => 'https://maps.app.goo.gl/ydyiFVYKffxBniz16', 'image' => 'img/destinasi/6.jpeg'],
            ] as $destination)
            <div class="lg:w-1/3 sm:w-1/2 p-4">
                <div class="destination-card">
                    <img alt="{{ $destination['title'] }}" class="destination-image" src="{{ asset($destination['image']) }}">
                    <div class="destination-info">
                        <h2 class="text-lg font-medium text-gray-900 mb-1">{{ $destination['title'] }}</h2>
                        <p class="text-sm mb-2">{{ $destination['description'] }}</p>
                        <a class="text-sm font-medium text-blue-500" href="{{ $destination['map'] }}" target="_blank">Google Maps</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </section>

    @push('after-styles')
<style>
    .animate-description {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .animate-description.show {
        opacity: 1;
        transform: translateY(0);
    }

    .destination-card {
        position: relative;
        overflow: hidden;
        border-radius: 0.5rem;
        height: 300px;
    }

    .destination-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .destination-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.9);
        padding: 1rem;
        transform: translateY(100%);
        transition: transform 0.5s ease;
    }

    .destination-card:hover .destination-image {
        transform: scale(1.1);
    }

    .destination-card:hover .destination-info {
        transform: translateY(0);
    }
</style>

@push('after-scripts')
<script>
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        var elements = document.getElementsByClassName('animate-description');
        for (var i = 0; i < elements.length; i++) {
            if (isElementInViewport(elements[i])) {
                elements[i].classList.add('show');
            } else {
                elements[i].classList.remove('show'); // Remove class when not in viewport
            }
        }
    }

    window.addEventListener('scroll', handleScroll);
    window.addEventListener('load', handleScroll);
</script>

@endpush

@endpush

@endsection