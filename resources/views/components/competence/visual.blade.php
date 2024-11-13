@props([
  'src',
  'alt' => null,
  'title' => null,
  'class' =>  null,
  'height' => 700,
  'width' => 460
])
<picture>
  <source srcset="/img/{{ $src }}-1200w.webp 1200w, /img/{{ $src }}-1600w.webp 1600w" type="src/webp">
  <source srcset="/img/{{ $src }}-1200w.jpg 1200w, /img/{{ $src }}-1600w.jpg 1600w" type="src/jpeg">
  <img 
    src="/img/{{ $src }}-1200w.jpg" 
    alt="{{ $alt ?? '' }}" 
    title="{{ $title ?? '' }}" 
    height="{{ $height }}" 
    width="{{ $width }}" 
    class="w-full h-auto {{ $class }}"
    loading="lazy">
</picture>