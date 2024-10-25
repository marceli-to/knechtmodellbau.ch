@extends('app')
@section('page_title', 'Kontakt')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20 gap-y-40 md:gap-y-60">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-2">
    <x-misc.address />
  </div>
  <div class="md:col-span-12 lg:col-span-6 lg:col-start-2">
    <x-misc.map />
  </div>
  <div class="md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-2">
    <h2 class="font-semibold">Impressum</h2>
    <div class="mt-20">
      <h3 class="font-semibold mb-2">Design und Programmierung</h3>
      <div>
        WBG AG – Visuelle Kommunikation, <br class="md:hidden">Zürich / <a href="https://wbg.ch" class="hover:underline underline-offset-2 decoration-2">wbg.ch</a>
      </div>
    </div>
    <div class="mt-20">
      <h3 class="font-semibold mb-2">Bilder</h3>
      <div>
        Daniel Sutter, Zürich / sutterdaniel.ch<br>
        WBG AG – Visuelle Kommunikation, Zürich<br> 
        Knecht Modellbau AG, Wettingen
      </div>
    </div>
    <div class="mt-60">
      <h3 class="font-semibold mb-2">Datenschutzerklärung</h3>
      <p>
        Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.
      </p>
      <h3 class="font-semibold mb-2">Cookies</h3>
      <p>
        Die Internetseiten verwenden teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert.
      </p>
    </div>
  </div>
</div>
@endsection
