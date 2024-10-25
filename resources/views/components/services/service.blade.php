@props([
  'title' => null,
  'text' => null,
  'image' => null,
  'last' => false,
])
<div {{ $attributes->merge(['class' => 'md:col-span-8 md:col-start-3 lg:col-span-4 lg:col-start-2']) }}>
  <div>
    <h2 class="font-semibold">
      {{ $title }}
    </h2>
  {{ $text }}
  </div>
</div>
<figure
  @class([
    'mt-20 mb-40 md:mt-60 md:mb-60 lg:mt-5 md:col-span-12 lg:col-span-6 lg:col-start-7', 
    '!mb-0' => $last
  ])>
  <img 
    src="{{ $image }}" 
    alt="{{ $title }}"
    class="w-full h-auto">
</figure>