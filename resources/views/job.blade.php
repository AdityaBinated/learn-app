<x-layout>
    <x-slot:headings>
        <h1 class="py-2 text-center font-mono text-2xl font-bold">
            Jobs by ID in URL: localhost/job/{{$jobs['id']}}
        </h1>
    </x-slot:headings>

    <div class="p-4">
        <h2 class="text-xl font-semibold mb-2 text-red-500">{{$jobs['title']}}</h2>
        <p class="mb-4 text-red-500 ">{{$jobs['salary']}} pays per year</p>

        <button onclick="window.history.back()" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded fixed bottom-4 left-4">
            Back
        </button>
    </div>
</x-layout>