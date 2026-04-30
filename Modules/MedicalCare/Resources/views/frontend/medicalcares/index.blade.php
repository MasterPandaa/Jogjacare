@extends('frontend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 py-20 dark:bg-gray-700 dark:text-white">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-blue-500 dark:text-white">
                {{ __($module_title) }}
            </h1>
            <button id="descriptionBtn" class="bg-gray-200 border-gray-300 text-gray-600 px-2 mb-4 rounded-lg border dark:bg-gray-600 dark:text-white dark:bg-gray-100 dark:border-gray-200">
                Show Description
            </button>
            <p class="mb-8 leading-relaxed hidden" id="description">
            Medical care is a cornerstone of modern society, encompassing a broad spectrum of services and practices designed to maintain, restore, and improve human health. At its core, medical care represents an organized effort to address health problems, prevent disease, and improve overall well-being through the application of scientific knowledge, clinical expertise, and compassionate care. <br>
            <br>The scope of health services is very broad and varied. This starts with primary health care, the first line of defense in health care, where general practitioners and family doctors provide routine check-ups, preventive services, and treat common health problems. This basic level of care serves as a gateway to more specialized services when needed, ensuring that patients receive appropriate attention for their specific health concerns.
            </p>
            <p class="mb-2 leading-relaxed mt-8">
                The list of {{ __($module_name) }}.
            </p>

            @include('frontend.includes.messages')
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-800 text-gray-600 p-6 sm:p-20">
    <div class="container mx-auto">
        <form action="{{ route('frontend.medicalcares.index') }}" method="GET" class="mb-8">
            <div class="flex flex-wrap justify-center -mx-2">
                <div class="w-full sm:w-1/2 md:w-2/5 px-2 mb-4">
                    <input class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Search by name" name="search" value="{{ request('search') }}">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <select class="w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="type">
                        <option value="">All Types</option>
                        <option value="Primary Health care" {{ request('type') == 'Primary Health care' ? 'selected' : '' }}>Primary Health care</option>
                        <option value="Secondary Health care" {{ request('type') == 'Secondary Health care' ? 'selected' : '' }}>Secondary Health care</option>
                        <option value="Tertiary Health care" {{ request('type') == 'Tertiary Health care' ? 'selected' : '' }}>Tertiary Health care</option>
                    </select>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <select class="w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sort">
                        <option value="">Sort By</option>
                        <option value="recent" {{ request('sort') == 'recent' ? 'selected' : '' }}>Most Recent</option>
                        <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest</option>
                    </select>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/5 px-2 mb-4">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded">
                        Filter
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($medicalcares as $medicalcare)
        @php
        $details_url = route("frontend.medicalcares.show",[encode_id($medicalcare->id), $medicalcare->slug]);
        @endphp
        
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col h-full relative">
            <span class="absolute top-2 left-2 bg-blue-500 text-white text-xs font-semibold px-2 py-1 rounded">
                {{ $medicalcare->type }}
            </span>
            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset($medicalcare->image) }}" alt="{{ $medicalcare->name }}">
            <div class="p-5 flex flex-col flex-grow">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $medicalcare->name }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex-grow overflow-hidden" style="display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical;">
                    {{ $medicalcare->intro }}
                </p>
                <div class="mt-auto">
                    <a href="{{ $details_url }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:bg-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:bg-blue-500">
                        View Details
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="d-flex justify-content-center w-100 mt-3">
        {{ $medicalcares->links() }}
    </div>
</section>

@endsection

@push('after-scripts')
<script>
    document.getElementById('descriptionBtn').addEventListener('click', function() {
        var description = document.getElementById('description');
        description.classList.toggle('hidden');
        if (!description.classList.contains('hidden')) {
            description.style.animation = 'fadeIn 0.5s';
        }
        this.textContent = description.classList.contains('hidden') ? 'Show Description' : 'Hide Description';
    });
</script>
@endpush

@push('after-styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endpush