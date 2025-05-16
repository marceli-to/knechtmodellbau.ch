@extends('app')
@section('site_title', 'Galerie')
@section('page_title', 'Galerie')
@section('page_description', 'Eine Auswahl von unseren Arbeiten.')
@section('content')

<div class="flex flex-col gap-y-20">
  
  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="flex flex-col gap-y-20 md:col-span-7 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5 md:col-start-3">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_01"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-7">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_02"
          :height="405"
          :width="900"
        />
      </div>
      <div class="md:col-span-5 md:col-start-3">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_03"
          :height="900"
          :width="900"
        />
      </div>
    </div>
    <div class="flex flex-col gap-y-20 md:col-span-5 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-full">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_04"
          :height="900"
          :width="900"
        />
      </div>
      <div class="md:col-span-full">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_05"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-full">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_06"
          :height="572"
          :width="900"
        />
      </div>
    </div>
  </div>

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="flex flex-col gap-y-20 md:col-span-5 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_07"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_08"
          :height="1172"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_09"
          :height="572"
          :width="900"
        />
      </div>
    </div>
    <div class="flex flex-col gap-y-20 md:col-span-7 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-7">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_10"
          :height="405"
          :width="900"
        />
      </div>
     <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_11"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_12"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-7">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_13"
          :height="405"
          :width="900"
        />
      </div>
    </div>
  </div>

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="flex flex-col gap-y-20 md:col-span-7 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5 md:col-start-3">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_14"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-5 md:col-start-3">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_15"
          :height="572"
          :width="900"
        />
      </div>
    </div>
    <div class="flex flex-col gap-y-20 md:col-span-5 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_16"
          :height="1172"
          :width="900"
        />
      </div>
    </div>
  </div>

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="flex flex-col gap-y-20 md:col-span-5 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_17"
          :height="900"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_18"
          :height="1172"
          :width="900"
        />
      </div>
    </div>
    <div class="flex flex-col gap-y-20 md:col-span-7 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_19"
          :height="572"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_20"
          :height="900"
          :width="900"
        />
      </div>
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_21"
          :height="572"
          :width="900"
        />
      </div>
    </div>
  </div>

  <div class="md:grid md:grid-cols-12 md:gap-x-20">
    <div class="flex flex-col gap-y-20 md:col-span-7 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-7">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_22"
          :height="404"
          :width="900"
        />
      </div>
    </div>
    <div class="flex flex-col gap-y-20 md:col-span-5 md:grid md:grid-cols-subgrid md:gap-20">
      <div class="md:col-span-5">
        <x-gallery.visual 
          image="knecht_modellbau_galerie_23"
          :height="900"
          :width="572"
        />
      </div>
    </div>
  </div>

</div>
@endsection
