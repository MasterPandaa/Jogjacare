@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} - {{ __($module_title) }} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 py-8">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="{{$$module_name_singular->name}}" src="{{ asset($$module_name_singular->image) }}">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">{{$$module_name_singular->name}}</h1>
            <p class="mb-4 leading-relaxed">
                <a href="{{route('frontend.'.$module_name.'.index')}}" class="bg-blue-500 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                    {{ __($module_title) }}
                </a>
            </p>
            @include('frontend.includes.messages')
        </div>
    </div>
</section>

<section class="bg-white text-gray-600 py-8">
    <div class="container mx-auto">
        <div class="w-full mb-10 rounded-lg overflow-hidden">
            <div class="flex flex-wrap">
                <div class="p-4 w-full">
                    <div class="border-2 rounded-lg border-gray-200 border-opacity-50 p-8">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 mr-4 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-gray-900 text-xl title-font font-medium">Type</h2>
                                <p class="leading-relaxed text-base">{{$$module_name_singular->type}}</p>
                            </div>
                        </div>
                        <div class="mb-6">
                            <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Description</h2>
                            <p class="leading-relaxed text-base">{{$$module_name_singular->description}}</p>
                        </div>
                        @if($$module_name_singular->address)
                        <div class="mb-6">
                            <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Address</h2>
                            <p class="leading-relaxed text-base">
                                <a href="https://www.google.com/maps/place/{{ urlencode($$module_name_singular->address) }}" target="_blank" class="text-blue-500 hover:underline">
                                    {{$$module_name_singular->address}}
                                </a>
                            </p>
                        </div>
                        @endif
                        @if($$module_name_singular->contact)
                        <div class="mb-6">
                            <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Contact</h2>
                            <p class="leading-relaxed text-base">{{$$module_name_singular->contact}}</p>
                        </div>
                        @endif
                        @if($$module_name_singular->maps)
                        <div class="mb-6">
                            <h2 class="text-gray-900 text-xl title-font font-medium mb-3">Maps</h2>
                            <p class="leading-relaxed text-base">
                                <a href="{{$$module_name_singular->maps}}" target="_blank" class="text-blue-500 hover:underline">
                                    View on Google Maps
                                </a>
                            </p>
                        </div>
                        @endif
                        <div class="flex items-center">
                            <span class="text-gray-500 mr-3">Published: {{ $$module_name_singular->created_at->format('M d, Y') }}</span>
                            <span class="text-gray-500">Last updated: {{ $$module_name_singular->updated_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection