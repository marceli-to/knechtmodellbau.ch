@extends('app')
@section('content')
<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="bg-purple-400 mt-140 lg:mt-170 md:col-span-9 lg:col-span-6 md:col-start-3 lg:col-start-2 lg:min-h-[calc(100dvh_-_260px)] lg:flex lg:flex-col lg:justify-between">
    <div>
      <div class="mb-50 md:mb-40 lg:mb-30 prose-width hyphens-auto lg:hyphens-none">
        <p>Seit 1970 bieten wir ein umfassendes Spektrum im Modellbau und verbinden dabei handwerkliches Können mit Leidenschaft und Effizienz. Ob Architektur-, Design-, Prototypenmodelle oder hochwertige Signaletik - wir sind Ihr zuverlässiger Partner für massgeschneiderte Komplettlösungen. Von der optimalen Darstellung über die richtige Materialwahl bis hin zum effizienten Herstellungsprozess stehen wir Ihnen zur Seite.</p>
      </div>
      <div class="md:min-h-[620px] mb-40 md:mb-20 lg:hidden">
        <x-swiper.wrapper>
          <x-swiper.slide image="knecht_modellbau_home_01" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_02" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_03" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_04" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_05" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_06" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_07" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_08" alt="" />
          <x-swiper.slide image="knecht_modellbau_home_09" alt="" />
        </x-swiper.wrapper>
      </div>
    </div>
    <x-misc.address />
  </div>
  <div 
    class="min-h-200 hidden lg:relative lg:z-40 lg:block lg:col-span-5 md:col-start-8"
    :class="{ '!z-10': show_menu }">
    <x-swiper.wrapper>
      <x-swiper.slide image="knecht_modellbau_home_01" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_02" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_03" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_04" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_05" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_06" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_07" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_08" alt="" />
      <x-swiper.slide image="knecht_modellbau_home_09" alt="" />
    </x-swiper.wrapper>
  </div>
</div>
@endsection