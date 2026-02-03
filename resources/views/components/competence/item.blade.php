@props([
  'image' => [
    'src' => null,
    'alt' => null,
    'title' => null,
    'height' => 700,
    'width' => 460,
    'priority' => false
  ]
])
<div {{ $attributes->merge(['class' => 'md:col-span-8 md:col-start-3 lg:col-span-4 lg:col-start-2']) }}>
  <x-competence.menu />
  <div class="[&>p]:hyphens-auto">
    {{ $slot }}
  </div>
</div>
<figure class="mt-20 mb-40 md:mt-60 md:mb-60 lg:mt-5 md:col-span-12 lg:col-span-6 lg:col-start-7">
  <x-competence.visual 
    src="{{ $image['src'] }}"
    width="{{ $image['width'] }}"
    height="{{ $image['height'] }}"
    alt="{{ $image['alt'] }}"
    title="{{ $image['title'] }}"
    priority="{{ $image['priority'] }}"
    class="w-full h-auto" />
</figure>
