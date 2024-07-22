<x-layout>
    <x-slot:headings>
        
        <h1 class=" py-2 text-center font-mono text-2xl font-bold ">Jobs</h1>
  
    </x-slot:headings>

    @foreach ($jobs as $job)
    <li><strong>{{$job['title']}}</strong>Pays{{$job['salary']}} per year</li>
@endforeach
</x-layout>
