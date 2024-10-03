<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <div class="space-y-4 bg-gray-100 p-6 rounded-lg">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block bg-white shadow-md border border-gray-200 rounded-lg p-4 hover:bg-gray-50">

                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name ?? 'No employer listed' }}</div>

                <strong class="text-lg">{{ $job['title'] }}:</strong>
                <p class="text-gray-700">Pays {{ $job['salary'] }} per year.</p>
            </a>
        @endforeach
    </div>
</x-layout>
