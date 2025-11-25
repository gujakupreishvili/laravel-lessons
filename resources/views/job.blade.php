<x-layout>
<x-slot:heading>
    Job
  </x-slot:headign>
   <h1 class="font-bold">{{$job['title']}}</h1>
   <p>this job pays {{$job['salary']}}</p>
</x-layout>