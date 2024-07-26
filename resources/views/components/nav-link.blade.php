@props([
  'active' => false,
  'type' => 'a',
])

<li>
  <a {{ $attributes }} class="{{ $active ? 'contrast' : 'secondary' }}">
    {{ $slot }}
  </a>
</li>
