<x-layout>
<x-slot:heading>
    Job
  </x-slot:heading>
   <h1 class="font-bold">{{$job['title']}}</h1>
   <p>this job pays {{$job['salary']}}</p> 
   <p>
   <x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button>

   </p>
</x-layout>