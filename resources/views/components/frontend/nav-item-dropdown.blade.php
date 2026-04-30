@props(['active' => '', 'title' => ''])

<li class="relative" x-data="{ open: false }" @click.away="open = false">
    <button
        @click="open = !open"
        class="flex items-center justify-between w-full border-b-2 px-3 py-2 sm:py-1 sm:my-0 font-semibold transition duration-200 ease-in hover:border-gray-700 hover:opacity-75 {{ $active ? 'bg-gray-200 dark:bg-gray-700 rounded sm:bg-transparent sm:rounded-none dark:sm:bg-transparent dark:sm:rounded-none border-blue-500 text-blue-500 dark:text-blue-500 hover:opacity-75' : 'text-gray-800 dark:text-white border-transparent dark:border-transparent' }}"
        type="button"
    >
        <span>{{ $title }}</span>
        <svg class="w-5 h-5 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
            :class="{'rotate-180': open, 'rotate-0': !open}">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>

    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 w-56 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-700 dark:divide-gray-600"
    >
        {{ $slot }}
    </div>
</li>