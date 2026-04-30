@props(['license' => '', 'author' => app_name(), 'author_url' => app_url()])

<div class="pt-6">
    @switch($license)
        @case('cc-by-sa')
            <div class="flex flex-col items-center justify-center text-center">
                <div class="sm:w-1/2 text-sm text-gray-500 dark:text-gray-300">
                    Except where otherwise noted, content on this site is created by <a class="hover:underline"
                        href="{{ $author_url }}" rel="#">Laravel 11 Framework</a> and licensed
                    under <a class="hover:underline" href="https://psti.unisayogya.ac.id/"
                        target="_blank">JogjaCare
                        Project of
                        Technology Information
                        'Aisyiyah Yogyakarta (2024)
                    </a>
                </div>
            </div>
        @break

        @default
            <div class="flex items-center justify-center text-center">
                <div class="w-1/2 text-sm text-gray-500">
                    &copy; {{ date('Y') }} <a href="{{ $author_url }}"
                        rel="cc:attributionURL dct:creator">{{ $author }}</a> All Right Reserved.
                    </a>
                </div>
            </div>
    @endswitch
</div>
