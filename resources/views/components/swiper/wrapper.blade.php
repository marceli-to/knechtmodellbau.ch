<div class="swiper js-swiper">
  <div class="swiper-wrapper">
    {{ $slot }}
  </div>
  <a 
    href="javascript:;" 
    class="js-swiper-prev absolute z-90 top-1/2 -translate-y-1/2 left-20">
    <x-icons.chevron-left class="w-14 h-26" />
  </a>
  <a 
    href="javascript:;" 
    class="js-swiper-next absolute z-90 top-1/2 -translate-y-1/2 right-20">
    <x-icons.chevron-right class="w-14 h-26" />
  </a>
</div>