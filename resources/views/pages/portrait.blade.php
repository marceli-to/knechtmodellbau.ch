@extends('app')
@section('page_title', 'Portrait')
@section('content')
<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-5 lg:col-start-2 prose-width">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error.</p>
  </div>
</div>
<div class="md:grid md:grid-cols-12 md:gap-x-20 mt-40">
  <div class="md:col-span-12">
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-40 md:gap-x-20 md:gap-y-60">
      <x-team.member name="John Doe" title="Projektleiter" email="john.doe@example.com" image="https://picsum.photos/800/1200" class="md:col-span-6 lg:col-span-3" />
      <x-team.member name="Jane Master" title="Modellbauer" email="john.doe@example.com" image="https://picsum.photos/800/1200" class="md:col-span-6 lg:col-span-3" />
      <x-team.member name="Peter Brabusch" title="Assistent" email="john.doe@example.com" image="https://picsum.photos/800/1200" class="md:col-span-6 lg:col-span-3" />
    </div>
  </div>
</div>
@endsection
