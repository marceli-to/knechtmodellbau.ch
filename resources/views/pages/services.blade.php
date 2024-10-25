@extends('app')
@section('page_title', 'Leistungen')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20">
  <x-services.service 
    title="Modellbau"
    text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error."
    image="https://picsum.photos/1200/800"
  />
  <x-services.service 
    title="Prototyping"
    text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error."
    image="https://picsum.photos/1200/800"
  />
  <x-services.service 
    title="Kleinserien / Unikate"
    text="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error."
    image="https://picsum.photos/1200/800"
    last="true"
  />
</div>
@endsection
