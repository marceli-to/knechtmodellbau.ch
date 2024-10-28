@extends('app')
@section('page_title', 'Portrait')
@section('content')
<div class="md:grid md:grid-cols-12 md:gap-x-20">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-5 lg:col-start-2 prose-width">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia facilis consequatur at in, est libero ad. Officia soluta ducimus eum est, eveniet quaerat sequi, asperiores, consequuntur facilis laudantium error.</p>
  </div>
</div>

<div class="md:grid md:grid-cols-12 md:gap-x-20 mt-40 md:mt-60">
  <div class="md:col-span-12">
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-40 md:gap-x-20 md:gap-y-60">
      <x-team.member 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
      />
      <x-team.member 
        name="Jane Master" 
        title="Modellbauer" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
      />
      <x-team.member 
        name="Peter Brabusch" 
        title="Assistent" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
      />
      <x-team.member 
        name="John Johnson" 
        title="Assistent" 
        email="john.johnson@example.com" 
        image="https://picsum.photos/800/1200" 
      />
    </div>
  </div>
</div>

<div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0 mt-45 md:mt-70 lg:mb-154">
  <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
    <div>
      <img src="https://picsum.photos/1200/800" alt="Portrait" class="w-full h-auto aspect-[760/500]">
    </div>
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <x-team.member 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
        class="md:!col-span-6"
        overlap
      />
      <x-team.member 
        name="Jane Master" 
        title="Modellbauer" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200"
        class="md:!col-span-6"
        overlap
      />
    </div>
  </div>
  <div class="md:col-span-12 lg:col-span-6 bg-red-100 lg:relative">
    <img src="https://picsum.photos/800/1200" alt="Portrait" class="lg:absolute w-full h-auto lg:h-full object-cover">
  </div>
</div>

<div class="md:grid md:grid-cols-12 md:gap-x-20 mt-45 md:mt-70 lg:mb-154">
  <div class="flex flex-col md:col-span-12 lg:grid lg:grid-cols-12 gap-y-20 lg:gap-x-20">
    <div class="lg:col-span-6">
      <img src="https://picsum.photos/1200/800" alt="Portrait" class="w-full h-auto lg:h-full aspect-[760/500]">
    </div>
    <div class="flex flex-col lg:col-span-6 md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <x-team.member 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
        class="md:!col-span-6"
        overlap
      />
      <x-team.member 
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

<div class="flex flex-col md:grid md:grid-cols-12 gap-20 lg:gap-y-0 mt-45 md:mt-70 lg:mb-94">
  <div class="md:col-span-12 lg:col-span-6 bg-red-100 lg:relative">
    <img src="https://picsum.photos/800/1200" alt="Portrait" class="lg:absolute w-full h-auto lg:h-full object-cover">
  </div>
  <div class="md:col-span-12 lg:col-span-6 flex flex-col gap-y-20">
    <div>
      <img src="https://picsum.photos/1200/800" alt="Portrait" class="w-full h-auto aspect-[760/500]">
    </div>
    <div class="flex flex-col md:grid md:grid-cols-12 gap-y-20 md:gap-y-0 md:gap-x-20">
      <x-team.member 
        name="John Doe" 
        title="Projektleiter" 
        email="john.doe@example.com" 
        image="https://picsum.photos/800/1200" 
        class="md:!col-span-6"
        overlap
      />
      <x-team.member 
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
@endsection
