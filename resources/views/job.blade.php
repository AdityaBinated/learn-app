<x-layout>
    <x-slot:headings>
        <h1 class="py-2 text-center font-mono text-2xl font-bold">
            Jobs by ID in URL: localhost/job/{{$jobs['id']}}
        </h1>
    </x-slot:headings>

    <div class="p-4">
        <h2 class="text-xl font-semibold mb-2 text-red-500">{{$jobs['title']}}</h2>
        <p class="mb-4 text-red-500 ">{{$jobs['salary']}} pays per year</p>


    </div>
</x-layout>
