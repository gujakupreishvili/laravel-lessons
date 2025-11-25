<x-layout>
<x-slot:heading>
    About page
  </x-slot:headign>
  <ul>

    @foreach($jobs as $job)
    <a href="/jobs/{{$job['id']}}">
    <li>

        {{$job['title']}} pays:{{$job['salary']}} per year
      </li>
    </a>
    @endforeach
  </ul>
</x-layout>