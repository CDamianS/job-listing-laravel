<x-layout>
  <x-slot:heading>Job</x-slot>
  <div class="container">
    <h2>{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year</p>
  </div>
</x-layout>
