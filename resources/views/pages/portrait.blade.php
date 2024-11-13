@extends('app')
@section('site_title', 'Portrait')
@section('page_title', 'Portrait')
@section('content')

<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-5 lg:col-start-2 prose-width">
    <p>Die 1970 von Max Knecht gegründete Einzelfirma, später Knecht&nbsp;+&nbsp;Partner Modellbau AG, wurde im Jahr 2000 von Christoph Smolders übernommen. Im Rahmen eines Rebrandings wurde die Firma im Jahr 2024 in Knecht Modellbau AG umbenannt. Das Unternehmen hat sich technologisch stets weiterentwickelt. Neben der nach wie vor wichtigen Handwerkskunst kommen modernste Produktionsverfahren zum Einsatz. Die Knecht Modellbau AG ist seit über 40 Jahren Lehrbetrieb für Architekturmodellbauer/innen&nbsp;EFZ.</p>
  </div>
</div>

<div class="flex flex-col space-y-40 md:space-y-60 mt-40 md:mt-60">

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
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

  <div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0">
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
      <x-team.visual 
        image="knecht_modellbau_portrait_08" 
        height="939" 
        width="700" 
        imageClass="w-full block lg:absolute lg:!h-full object-cover" />
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

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="md:col-span-12">
      <div class="flex flex-col md:grid md:grid-cols-12 gap-y-40 md:gap-x-20 md:gap-y-60">
        <div class="md:col-span-6 lg:col-span-3">
          <x-team.portrait 
            name="Benjamin Kämpf" 
            title="Architekturmodellbauer" 
            email="kaempf@knechtmodellbau.ch"
            bio="Seit 2016 bei Knecht Modellbau"
            image="knecht_modellbau_portrait_09_benjamin_kaempf" />
        </div>
        <div class="md:col-span-6 lg:col-span-3">
          <x-team.visual image="knecht_modellbau_portrait_10" />
        </div>
        <div class="md:col-span-6 lg:col-span-3">
          <x-team.portrait 
            name="Alisha Smolders" 
            title="Administration / Rechnungswesen" 
            bio="Seit 2023 bei Knecht Modellbau" 
            email="info@knechtmodellbau.ch"
            image="knecht_modellbau_portrait_11_alisha_smolders" />
        </div>
        <div class="md:col-span-6 lg:col-span-3">
          <x-team.portrait 
            name="Paul Conrad" 
            title="Architekturmodellbauer" 
            bio="Seit 2003 bei Knecht Modellbau" 
            email="conrad@knechtmodellbau.ch"
            image="knecht_modellbau_portrait_12_paul_conrad" />
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0">
    <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
      <div>
        <x-team.visual image="knecht_modellbau_portrait_13" class="w-full h-auto aspect-[760/460]" height="460" width="760" />
      </div>
      <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.portrait 
            name="Claudia Smolders" 
            title="Administration / Rechnungswesen" 
            email="c.smolders@knechtmodellbau.ch"
            bio="Seit 2000 bei Knecht Modellbau"
            image="knecht_modellbau_portrait_14_claudia_smolders" 
            class="md:!col-span-6"
            captionClass="lg:hidden"
          />
        </div>
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.visual image="knecht_modellbau_portrait_15" />
        </div>
      </div>
    </div>
    <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
      <div>
        <x-team.visual image="knecht_modellbau_portrait_13" class="w-full h-auto aspect-[760/460]" height="460" width="760" />
      </div>
      <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.portrait 
            name="Joya Stettler" 
            title="Architekturmodellbauerin" 
            bio="Seit 2023 bei Knecht Modellbau"
            image="knecht_modellbau_portrait_16_joya_stettler" 
            class="md:!col-span-6"
            captionClass="lg:hidden"
          />
        </div>
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.portrait 
            name="Franziska Loser" 
            title="Architekturmodellbauerin" 
            bio="Seit 2018 bei Knecht Modellbau" 
            image="knecht_modellbau_portrait_17_franziska_loser"
            class="md:!col-span-6"
            captionClass="lg:hidden"
          />
        </div>
      </div>
    </div>
    <div class="hidden lg:col-span-12 lg:grid lg:grid-cols-12 lg:gap-x-20">
      <div class="lg:col-span-3">
        <x-team.caption 
          name="Claudia Smolders" 
          title="Administration / Rechnungswesen" 
          email="c.smolders@knechtmodellbau.ch"
          bio="Seit 2000 bei Knecht Modellbau" />
      </div>
      <div class="lg:col-span-3 lg:col-start-7">
        <x-team.caption 
          name="Joya Stettler" 
          title="Architekturmodellbauerin" 
          bio="Seit 2023 bei Knecht Modellbau" />
      </div>
      <div class="lg:col-span-3">
        <x-team.caption 
          name="Franziska Loser" 
          title="Architekturmodellbauerin" 
          bio="Seit 2018 bei Knecht Modellbau" />
      </div>
    </div>
  </div>

  <div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0">
    <div class="md:col-span-12 lg:col-span-6 lg:relative">
      <x-team.visual 
        image="knecht_modellbau_portrait_18" 
        height="939" 
        width="700" 
        imageClass="w-full block lg:absolute lg:!h-full object-cover" />
    </div>
    <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
      <div>
        <x-team.visual image="knecht_modellbau_portrait_19" class="w-full h-auto aspect-[760/460]" height="460" width="760" />
      </div>
      <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.portrait 
            name="Ronja Lingenhag" 
            title="Architekturmodellbauerin" 
            bio="Seit 2020 bei Knecht Modellbau"
            image="knecht_modellbau_portrait_20_ronja_lingenhag" 
            class="md:!col-span-6"
            captionClass="lg:hidden"
          />
        </div>
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.portrait 
            name="Aita Schäfli" 
            title="Lernende Architekturmodellbau" 
            bio="Seit 2023 bei Knecht Modellbau"
            class="md:!col-span-6"
            image="knecht_modellbau_portrait_21_aita_schaefli"
            captionClass="lg:hidden"
          />
        </div>
      </div>
    </div>
    <div class="hidden lg:col-span-12 lg:grid lg:grid-cols-12 lg:gap-x-20">
      <div class="lg:col-span-3 lg:col-start-7">
        <x-team.caption 
          name="Ronja Lingenhag" 
          title="Architekturmodellbauerin" 
          bio="Seit 2020 bei Knecht Modellbau" />
      </div>
      <div class="lg:col-span-3 lg:col-start-10">
        <x-team.caption 
          name="Aita Schäfli" 
          title="Lernende Architekturmodellbau" 
          bio="Seit 2023 bei Knecht Modellbau" />
      </div>
    </div>
  </div>

  <div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0">
    <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
      <div>
        <x-team.visual image="knecht_modellbau_portrait_22" class="w-full h-auto aspect-[760/460]" height="460" width="760" />
      </div>
      <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.visual image="knecht_modellbau_portrait_23" />
        </div>
        <div class="md:col-span-6 lg:col-span-6">
          <x-team.visual image="knecht_modellbau_portrait_24" />
        </div>
      </div>
    </div>
    <div class="md:col-span-12 lg:col-span-6 lg:relative">
      <x-team.visual 
        image="knecht_modellbau_portrait_25" 
        height="939" 
        width="700" 
        imageClass="w-full block lg:absolute lg:!h-full object-cover"/>
    </div>
  </div>

</div>
@endsection
