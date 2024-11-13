<div 
  x-cloak 
  x-show="show_menu"
  class="fixed z-50 left-0 top-0 w-full h-dvh bg-white/90">
  <nav 
    @class([
      'w-full px-30 md:px-35 lg:px-30',
      'pt-140 lg:pt-200' => Request::routeIs('page.home'),
      'pt-110 md:pt-140 lg:pt-200' => !Request::routeIs('page.home'),
    ])>
    <ul class="flex flex-col gap-y-16 lg:gap-y-32 leading-none">
      <x-menu.main-item href="page.portrait" title="Portrait" />
      <x-menu.main-item href="page.gallery" title="Galerie" />
      <x-menu.main-item href="page.competences" title="Kompetenzen" />
      <x-menu.main-item href="page.contact" title="Kontakt" />
    </ul> 
  </nav>
</div>

