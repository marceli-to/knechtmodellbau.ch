@props([
  'name', 
  'title' => null, 
  'email' => null, 
  'image',
  'overlap' => false
])
<figure {{ $attributes->merge(['class' => 'md:col-span-6 lg:col-span-3 relative']) }}>
  <img 
    src="{{ $image }}" 
    alt="Member"
    class="w-full h-auto">
  <figcaption class="pt-16 {{ $overlap ? 'lg:absolute lg:-bottom-94 lg:!pt-0 lg:left-0 w-full h-auto' : '' }}">
    <h2 class="font-semibold">
      {{ $name }}
    </h2>
    @if ($title)
      <div>
        {{ $title }}
      </div>
    @endif
    @if ($email)
      <div>
        <a 
          href="mailto:{{ $email }}"
          class="hover:underline underline-offset-2 decoration-1">
          {{ $email }}
        </a>
      </div>
    @endif
  </figcaption>
</figure>
