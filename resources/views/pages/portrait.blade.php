@extends('app')
@section('page_title', 'Portrait')
@section('content')
<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-5 lg:col-start-2 prose-width">
    <p>Die 1970 von Max Knecht gegründete Einzelfirma, später Knecht&nbsp;+&nbsp;Partner Modellbau AG, wurde im Jahr 2000 von Christoph Smolders übernommen. Im Rahmen eines Rebrandings wurde die Firma im Jahr 2024 in Knecht Modellbau AG umbenannt. Das Unternehmen hat sich technologisch stets weiterentwickelt. Neben der nach wie vor wichtigen Handwerkskunst kommen modernste Produktionsverfahren zum Einsatz. Die Knecht Modellbau AG ist seit über 40 Jahren Lehrbetrieb für Architekturmodellbauer/innen&nbsp;EFZ.</p>
  </div>
</div>

<div class="md:grid md:grid-cols-12 md:gap-x-20 mt-40 md:mt-60">
  <div class="md:col-span-12">
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-40 md:gap-x-20 md:gap-y-60">
      <div class="md:col-span-6 lg:col-span-3">
        <x-team.portrait 
          name="Christoph Smolders" 
          title="Geschäftsführer" 
          email="ch.smolders@knechtmodellbau.ch"
          bio="Seit 1988 bei Knecht Modellbau"
          image="knecht_modellbau_portrait_01_christoph_smolders" />
      </div>
      <div class="md:col-span-6 lg:col-span-3">
        <x-team.visual image="knecht_modellbau_portrait_02" />
      </div>
      <div class="md:col-span-6 lg:col-span-3">
        <x-team.portrait 
          name="Brogle Lee" 
          title="Architekturmodellbauer" 
          bio="Seit 2019 bei Knecht Modellbau" 
          image="knecht_modellbau_portrait_03_brogle_lee" />
      </div>
      <div class="md:col-span-6 lg:col-span-3">
        <x-team.portrait 
          name="Simon Littwin" 
          title="Lernender Architekturmodellbau" 
          bio="Seit 2021 bei Knecht Modellbau" 
          image="knecht_modellbau_portrait_04_simon_littwin" />
      </div>
    </div>
  </div>
</div>

<div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0 mt-45 md:mt-70">
  <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
    <div>
      <x-team.visual image="knecht_modellbau_portrait_05" class="w-full h-auto aspect-[760/460]" height="460" width="760" />
    </div>
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <div class="md:col-span-6 lg:col-span-6">
        <x-team.portrait 
          name="Roger Baumgartner" 
          title="Architekturmodellbauer / Kunststofftechiker HF" 
          email="baumgartner@knechtmodellbau.ch"
          bio="Seit 1994 bei Knecht Modellbau"
          image="knecht_modellbau_portrait_06_roger_baumgartner" 
          class="md:!col-span-6"
          captionClass="lg:hidden"
        />
      </div>
      <div class="md:col-span-6 lg:col-span-6">
        <x-team.portrait 
          name="Dario Bugmann" 
          title="Architekturmodellbauer / Hochbauzeichner" 
          email="bugmann@knechtmodellbau.ch"
          bio="Bachelor of Arts in Architektur" 
          image="knecht_modellbau_portrait_07_dario_bugmann"
          class="md:!col-span-6"
          captionClass="lg:hidden"
        />
      </div>
    </div>
  </div>
  <div class="md:col-span-12 lg:col-span-6 lg:relative">
    <picture>
      <source srcset="/img/knecht_modellbau_portrait_08-700w.webp 700w, /img/knecht_modellbau_portrait_08-1200w.webp 1200w, /img/knecht_modellbau_portrait_08-1600w.webp 1600w" type="image/webp">
      <source srcset="/img/knecht_modellbau_portrait_08-700w.jpg 700w, /img/knecht_modellbau_portrait_08-1200w.jpg 1200w, /img/knecht_modellbau_portrait_08-1600w.jpg 1600w" type="image/jpeg">
      <img src="/img/knecht_modellbau_portrait_08-700w.jpg" alt="" title="" height="939" width="700" class="w-full block lg:absolute lg:!h-full object-cover">
    </picture>
  </div>
  <div class="hidden lg:col-span-12 lg:grid lg:grid-cols-12 lg:gap-x-20">
    <div class="lg:col-span-3">
      <x-team.caption 
        name="Roger Baumgartner" 
        title="Architekturmodellbauer / Kunststofftechiker HF" 
        email="baumgartner@knechtmodellbau.ch"
        bio="Seit 1994 bei Knecht Modellbau" />
    </div>
    <div class="lg:col-span-3">
      <x-team.caption 
        name="Dario Bugmann" 
        title="Architekturmodellbauer / Hochbauzeichner" 
        email="bugmann@knechtmodellbau.ch"
        bio="Bachelor of Arts in Architektur" />
    </div>
  </div>
</div>

{{-- <div class="md:grid md:grid-cols-12 md:gap-x-20 mt-45 md:mt-70">
  <div class="flex flex-col md:col-span-12 lg:grid lg:grid-cols-12 gap-y-20 lg:gap-x-20">
    <div class="lg:col-span-6">
      <img src="https://picsum.photos/1200/800" alt="Portrait" class="w-full h-auto lg:h-full aspect-[760/500]">
    </div>
    <div class="flex flex-col lg:col-span-6 md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <x-team.portrait 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
        class="md:!col-span-6"
        overlap
      />
      <x-team.portrait 
        name="Jane Master" 
        title="Modellbauer" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200"
        class="md:!col-span-6"
        overlap
      />
    </div>
  </div>
</div>

<div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0 mt-45 md:mt-70">
  <div class="md:col-span-12 lg:col-span-6 bg-red-100 lg:relative">
    <img src="https://picsum.photos/800/1200" alt="Portrait" class="lg:absolute w-full h-auto lg:h-full object-cover">
  </div>
  <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
    <div>
      <img src="https://picsum.photos/1200/800" alt="Portrait" class="w-full h-auto aspect-[760/500]">
    </div>
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <x-team.portrait 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
        class="md:!col-span-6"
        overlap
      />
      <x-team.portrait 
        name="Jane Master" 
        title="Modellbauer" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200"
        class="md:!col-span-6"
        overlap
      />
    </div>
  </div>
</div> --}}
@endsection
