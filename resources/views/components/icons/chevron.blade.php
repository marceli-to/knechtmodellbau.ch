@props(['active' => false, 'class' => null])
@if ($active)
  <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-13 {{ $class }}">
    <path d="M1.8 0.399902L7.8 6.3999L1.8 12.3999L0.699997 11.2999L5.7 6.3999L0.699997 1.49991L1.8 0.399902Z" fill="currentColor"/>
  </svg>
  {{-- <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="block md:hidden w-6 h-10 {{ $class }}">
    <path d="M1.5 0.899902L6 5.3999L1.5 9.8999L0.700012 9.09991L4.39999 5.3999L0.700012 1.69992L1.5 0.899902Z" fill="currentColor"/>
  </svg> --}}
@else
  <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-8 h-13 {{ $class }}">
    <path d="M1.39999 0.399902L7.39999 6.3999L1.39999 12.3999L0.700012 11.6999L6.10001 6.3999L0.700012 1.09991L1.39999 0.399902Z" fill="currentColor"/>
  </svg>
  {{-- <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg" class="block md:hidden w-6 h-10 {{ $class }}">
    <path d="M1.20001 0.899902L5.70001 5.3999L1.20001 9.8999L0.700012 9.3999L4.70001 5.3999L0.700012 1.3999L1.20001 0.899902Z" fill="currentColor"/>
  </svg> --}}
@endif
