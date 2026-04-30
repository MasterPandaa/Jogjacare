@extends('frontend.layouts.app')

@section('title') {{ __($module_title) }} @endsection

@section('content')

<section class="bg-gray-100 text-gray-600 py-20 dark:bg-gray-700 dark:text-white">
    <div class="container mx-auto flex px-5 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-3xl sm:text-4xl mb-4 font-medium text-gray-800 dark:text-white">
                {{ __($module_title) }}
            </h1>
            <button id="descriptionBtn" class="bg-gray-200 border-gray-300 text-gray-600 px-2 mb-4 rounded-lg border dark:bg-gray-600 dark:text-white dark:bg-gray-100 dark:border-gray-200">
                Show Description
            </button>
            <p class="mb-8 leading-relaxed hidden" id="description">
            Treatment costs are a major and frequently debated aspect of healthcare systems around the world. These expenses include all financial expenses related to health maintenance, disease prevention, and treatment of medical conditions. As healthcare advances and the population ages, understanding and managing medical costs becomes increasingly important for individuals, healthcare providers, and policy makers.Essentially, medical costs include direct expenses such as doctor visits, hospital stays, prescription drugs, and diagnostic tests.<br>
            <br>Medical expense coverage is complex and varies widely in different contexts. Factors such as geographic location, type of healthcare provider, complexity of the medical condition, and insurance coverage all play a role in determining the final cost of medical care. This variability can make it difficult for individuals to estimate and plan their health care costs, often leading to financial stress or, in some cases, avoidance of necessary medical care.
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
        <form action="{{ route('frontend.medicalcosts.index') }}" method="GET" class="mb-8">
            <div class="flex flex-wrap justify-center -mx-2">
                <div class="w-full sm:w-1/2 md:w-2/6 px-2 mb-4">
                    <input class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Search by name" name="search" value="{{ request('search') }}">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/6 px-2 mb-4">
                    <input class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Minimum Price" name="min_price" value="{{ request('min_price') }}">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/6 px-2 mb-4">
                    <input class="w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="Maximum Price" name="max_price" value="{{ request('max_price') }}">
                </div>
                <div class="w-full sm:w-1/2 md:w-1/6 px-2 mb-4">
                    <select class="w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="sort">
                        <option value="">Sort By</option>
                        <option value="lowest_price" {{ request('sort') == 'lowest_price' ? 'selected' : '' }}>Lowest Price</option>
                        <option value="highest_price" {{ request('sort') == 'highest_price' ? 'selected' : '' }}>Highest Price</option>
                    </select>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/6 px-2 mb-4">
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded">
                        Filter
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3" style="width: 5%;">No.</th>
                    <th scope="col" class="px-6 py-3" style="width: 45%;">Service Name</th>
                    <th scope="col" class="px-6 py-3" style="width: 25%;">Lowest Price</th>
                    <th scope="col" class="px-6 py-3" style="width: 25%;">Highest Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($$module_name as $index => $$module_name_singular)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-4 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $$module_name_singular->name }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($$module_name_singular->lowest_price, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($$module_name_singular->highest_price, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center w-100 mt-3">
        {{$$module_name->links()}}
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