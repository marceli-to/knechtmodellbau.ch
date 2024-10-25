@props([
  'name', 
  'title' => null, 
  'email' => null, 
  'image'
])
<figure {{ $attributes->merge(['class' => 'md:col-span-6 lg:col-span-3']) }}>
  <img 
    src="{{ $image }}" 
    alt="Member"
    class="w-full h-auto">
  <figcaption class="pt-16">
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
