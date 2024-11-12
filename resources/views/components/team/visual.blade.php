@props([
  'image',
  'imageClass' => '',
  'height' => 700,
  'width' => 1045
])
<figure>
  <picture>
    <source srcset="/img/{{ $image }}-700w.webp 700w, /img/{{ $image }}-1200w.webp 1200w" type="image/webp">
    <source srcset="/img/{{ $image }}-700w.jpg 700w, /img/{{ $image }}-1200w.jpg 1200w" type="image/jpeg">
    <img src="/img/{{ $image }}-700w.jpg" alt="" title="" height="{{ $height }}" width="{{ $width }}" class="w-full h-auto {{ $imageClass }}">
  </picture>
</figure>
