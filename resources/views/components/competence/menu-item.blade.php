@props(['href', 'title' => null])
<li>
  <a 
    href="{{ route($href) }}"
    title="{{ __($title) }}"
    @class([
      'group text-steel hover:text-black transition-colors flex justify-start items-start gap-x-6 md:gap-x-8',
      'font-semi !text-black' => Route::is($href),
    ])>
    <x-icons.chevron 
      class="{{ Route::is($href) ? 'text-black' : 'text-steel' }}  mt-4 md:mt-6 group-hover:text-black transition-colors"
      active="{{ Route::is($href) }}" />
    <span>{{ __($title) }}</span>
  </a>
</li>