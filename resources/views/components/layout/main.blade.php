<main 
  role="main" 
  @class([
    'w-full flex-grow relative',
    'pt-30 pb-30 md:pt-35 md:pb-35 lg:pt-30 lg:pb-30' => Request::routeIs('page.home'),
    'pt-110 md:pt-140 lg:pt-200 pb-30 md:pb-35 lg:pb-30' => !Request::routeIs('page.home'),
  ])>
  {{ $slot }}
</main>
