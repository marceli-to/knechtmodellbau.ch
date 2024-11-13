@props([
  'name', 
  'title' => null, 
  'email' => null, 
  'bio' => null,
  'image',
  'captionClass' => null
])
<figure>
  <picture>
    <source srcset="/img/{{ $image }}-700w.webp 700w, /img/{{ $image }}-1200w.webp 1200w" type="image/webp">
    <source srcset="/img/{{ $image }}-700w.jpg 700w, /img/{{ $image }}-1200w.jpg 1200w" type="image/jpeg">
    <img 
      src="/img/{{ $image }}-700w.jpg" 
      alt="{{ $name }}" 
      title="{{ $name }}" 
      height="700" 
      width="1045" 
      class="w-full h-auto"
      loading="lazy">
  </picture>
  <x-team.caption 
    name="{{ $name }}" 
    title="{{ $title }}" 
    email="{{ $email }}" 
    bio="{{ $bio }}"
    captionClass="{{ $captionClass }}" />
</figure>
