@props(['href', 'title' => null])
<li>
  <a 
    href="{{ route($href) }}"
    title="{{ __($title) }}"
    {{ $attributes->merge(['class' => 'text-lg lg:text-xl']) }}>
    {{ __($title) }}
  </a>
</li>