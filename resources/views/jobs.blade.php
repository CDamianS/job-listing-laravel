<x-layout>
  <x-slot:heading>Jobs</x-slot>

  <div class="container">
    <h1>Jobs listing</h1>
    <ul>
      @foreach ($jobs as $job)
        <li>
          <a class="contrast" href="/jobs/{{ $job['id'] }}">{{ $job['title'] }} Pays {{ $job['salary'] }}</a>
        </li>
      @endforeach
    </ul>
  </div>
</x-layout>
