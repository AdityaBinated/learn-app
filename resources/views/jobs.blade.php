<x-layout>
    <x-slot:headings>
        <h1 class="py-2 text-center font-mono text-2xl font-bold">Jobs</h1>
    </x-slot:headings>

    <ul class="list-disc list-inside  p-4">
        @foreach ($jobs as $job)
            <li class="mb-2 list-marker-red ">
                <a href="job/{{ $job['id'] }}" class="text-red-500 hover:text-red-700">
                    <strong>{{ $job['title'] }}</strong> - Pays {{ $job['salary'] }} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
