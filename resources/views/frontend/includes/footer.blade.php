<footer class="border-2 border-gray-200 dark:border-gray-700 bg-blue-100 dark:bg-gray-800 sm:p-10">
    <div class="mx-auto max-w-screen-xl text-center">
        <a class="flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white" href="/">
            <img class="h-10" src="{{ asset('img/JOGJACARE-blue.png') }}" alt="{{ app_name() }} Logo" />
        </a>
        <p class="mx-auto my-6 text-gray-500 dark:text-gray-300 sm:w-1/2">
            {!! setting('meta_description') !!}
        </p>
        <ul class="mb-6 flex flex-wrap items-center justify-center text-gray-900 dark:text-white">
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route('frontend.aboutus') }}" wire:navigate.hover>@lang('About')</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route('privacy') }}" wire:navigate.hover>@lang('Privacy')</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route('terms') }}" wire:navigate.hover>@lang('Terms')</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#">@lang('FAQs')</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route('frontend.contact') }}" wire:navigate.hover>@lang('Contact')</a>
            </li>
        </ul>

        <x-frontend.social.all-social-url />

        <x-frontend.footer-license license='cc-by-sa' />

        <x-frontend.footer-credit />
    </div>
</footer>
