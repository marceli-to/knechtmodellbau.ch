@props([
  'name', 
  'title' => null, 
  'email' => null, 
  'image'
])
<figure {{ $attributes->merge(['class' => '']) }}>
  <img 
    src="{{ $image }}" 
    alt="Member"
    class="w-full h-auto">
  <figcaption class="pt-20 flex flex-col gap-y-1">
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
        <a href="mailto:{{ $email }}">{{ $email }}</a>
      </div>
    @endif
  </figcaption>
</figure>
