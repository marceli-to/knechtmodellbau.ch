<header
  @class([
    'fixed top-0 left-0 z-40 w-full px-30 md:px-35 lg:px-30 pt-30 md:pt-35 lg:pt-30',
    'h-80 md:h-85 lg:h-80' => Request::routeIs('page.home'),
    'bg-white h-110 md:h-140 lg:h-200' => !Request::routeIs('page.home'),
  ])>
  <div class="relative md:grid md:grid-cols-12 md:gap-x-20 mx-auto">
    <div class="relative z-80 md:col-span-10 md:col-start-3 lg:col-start-2">
      <a 
        href="{{ route('page.home') }}"
        title="Startseite">
        <x-icons.logo 
          class=""
          @class([
            'w-auto inline-block',
            'h-50' => Request::routeIs('page.home'),
            'h-20 md:h-50' => !Request::routeIs('page.home'),
          ]) />
      </a>
    </div>
    @if (!Request::routeIs('page.home'))
      <x-misc.page-title />
    @endif
    <a 
      href="javascript:;" 
      x-on:click="show_menu = ! show_menu;" 
      title="Menü anzeigen"
      class="fixed right-30 top-30 z-90 md:right-auto md:top-auto md:relative md:col-span-1 md:order-first">
        <span x-show="show_menu === false">
          <x-icons.burger class="block w-30 h-20" />
        </span>
        <span x-cloak x-show="show_menu === true">
          <x-icons.cross class="block w-20 h-20 mr-5 md:mr-auto md:ml-5" />
        </span>
    </a>
    <x-menu.main />
  </div>
</header>
