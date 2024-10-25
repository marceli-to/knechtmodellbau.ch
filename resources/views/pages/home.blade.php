@extends('app')
@section('page_title', 'Leistungen')
@section('content')
<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="mt-110 md:mt-105 lg:mt-170 md:col-span-9 lg:col-span-6 md:col-start-3 lg:col-start-2 lg:min-h-[calc(100vh_-_230px)] lg:flex lg:flex-col lg:justify-between">
    <div>
      <div class="mb-50 md:mb-40 lg:mb-30 lg:max-w-[540px] hyphens-auto lg:hyphens-none">
        <p>Seit über 50 Jahren bieten wir das gesamte Spektrum des modernen Modellbaus und verbinden handwerkliches Geschick mit Leidenschaft und Effizienz. Von der optimalen Darstellung über die passende Materialwahl bis zum effizienten Herstellungsprozess sind wir Ihr zuverlässiger Partner für Komplettlösungen, sei es für Architektur- und Designmodelle, Prototypen, Einzelstücke oder hochwertige Beschriftungen.</p>
        <p>Derzeit überarbeiten wir unseren Unternehmensauftritt, unsere neue Website ist ab Herbst 2024 online.</p>
      </div>
      <div class="md:min-h-[620px] mb-40 md:mb-20 lg:hidden">
        <x-swiper.wrapper>
          <x-swiper.slide image="knecht_modellbau_00" alt="" />
          <x-swiper.slide image="knecht_modellbau_01" alt="" />
          <x-swiper.slide image="knecht_modellbau_02" alt="" />
          <x-swiper.slide image="knecht_modellbau_03" alt="" />
          <x-swiper.slide image="knecht_modellbau_04" alt="" />
          <x-swiper.slide image="knecht_modellbau_05" alt="" />
          <x-swiper.slide image="knecht_modellbau_06" alt="" />
        </x-swiper.wrapper>
      </div>
    </div>
    <x-misc.address />
  </div>
  <div 
    class="min-h-200 hidden lg:relative lg:z-40 lg:block lg:col-span-5 md:col-start-8"
    :class="{ '!z-10': show_menu }">
    <x-swiper.wrapper>
      <x-swiper.slide image="knecht_modellbau_00" alt="" />
      <x-swiper.slide image="knecht_modellbau_01" alt="" />
      <x-swiper.slide image="knecht_modellbau_02" alt="" />
      <x-swiper.slide image="knecht_modellbau_03" alt="" />
      <x-swiper.slide image="knecht_modellbau_04" alt="" />
      <x-swiper.slide image="knecht_modellbau_05" alt="" />
      <x-swiper.slide image="knecht_modellbau_06" alt="" />
    </x-swiper.wrapper>
  </div>
</div>
@endsection