<div 
  x-cloak 
  x-show="show_menu"
  class="fixed z-50 left-0 top-0 w-full h-dvh bg-white/90">
  <nav 
    @class([
      'w-full px-30 md:px-35 lg:px-30',
      'pt-173 lg:pt-200' => Request::routeIs('page.home'),
      'pt-113 md:pt-143 lg:pt-163' => !Request::routeIs('page.home'),
    ])>
    <ul class="flex flex-col gap-y-24 lg:gap-y-32 leading-none">
      <x-menu.main-item href="page.portrait" title="Portrait" />
      <x-menu.main-item href="page.gallery" title="Galerie" />
      <x-menu.main-item href="page.competences.spectrum" title="Kompetenzen" />
      <x-menu.main-item href="page.contact" title="Kontakt" />
      <a 
        href="https://www.instagram.com/knechtmodellbau.ch/"
        target="_blank"
        title="Instagram"
        rel="noopener noreferrer">
        <x-icons.instagram class="size-20 lg:size-26 mt-6 lg:mt-8" />
      </a>
    </ul> 
  </nav>
</div>

