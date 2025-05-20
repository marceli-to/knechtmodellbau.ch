@props([
  'image',
  'class' => null,
  'height' => null,
  'width' => null
])
<picture>
  {{-- <source 
    srcset="/img/{{ $image }}-900w.avif 900w, /img/{{ $image }}-1200w.avif 1200w, /img/{{ $image }}-1600w.avif 1600w, /img/{{ $image }}-2000w.avif 2000w" 
    type="image/avif"> --}}
  <source 
    srcset="/img/{{ $image }}-900w.webp 900w, /img/{{ $image }}-1200w.webp 1200w, /img/{{ $image }}-1600w.webp 1600w, /img/{{ $image }}-2000w.webp 2000w" 
    type="image/webp">
  <source 
    srcset="/img/{{ $image }}-900w.jpg 900w, /img/{{ $image }}-1200w.jpg 1200w, /img/{{ $image }}-1600w.jpg 1600w, /img/{{ $image }}-2000w.jpg 2000w" 
    type="image/jpeg">
  <img 
    src="/img/{{ $image }}-900w.jpg" 
    alt="" 
    title="" 
    height="{{ $height }}" 
    width="{{ $width }}" 
    class="w-full h-auto {{ $class }}"
    loading="lazy">
</picture>

