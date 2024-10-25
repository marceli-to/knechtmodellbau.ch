@props(['image', 'alt' => ''])
<div class="swiper-slide">
  <figure>
    <picture>
      <img src="/img/{{ $image }}.jpg" alt="{{ $alt }}" title="{{ $alt }}" height="1600" width="900">
    </picture>
  </figure>
</div>