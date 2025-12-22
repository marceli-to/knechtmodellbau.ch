@extends('app')
@section('site_title', 'Kontakt')
@section('page_title', 'Kontakt')
@section('page_description', 'Kontaktieren Sie uns für individuelle Beratung, Angebote und Fragen zu unseren Leistungen.')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20 gap-y-40 md:gap-y-60">
  <div class="md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-2">
    <x-misc.address />
  </div>
  <div class="md:col-span-12 lg:col-span-11 lg:col-start-2 md:grid md:grid-cols-subgrid md:gap-20">
    <div class="md:col-span-12 lg:col-span-6">
      <x-misc.map />
    </div>
    <div class="md:col-start-3 md:col-span-8 lg:col-span-4 mt-40 md:mt-60 lg:mt-0 bg-aqua min-h-200 p-12 lg:p-16">
      <div>
        <strong>2026 bieten wir folgende Schnuppertage an:</strong>
        <ul class="mt-4">
          <li>11. Februar 2026</li>
          <li>8. April 2026</li>
          <li>20. Mai 2026</li>
          <li>25. November 2026</li>
        </ul>
        <p>
          Bewirb Dich jetz per E-Mail an:<br>
          <strong>
            <a href="mailto:schnuppern@knechtmodellbau.ch">schnuppern@knechtmodellbau.ch</a>
          </strong>
        </p>
        <p>Gib uns Deinen Namen, Deine Adresse und Deine Telefonnummer an.</p>
        <div>Beantworte in Deiner E-Mail folgende Fragen in einem kurzen Text:</div>
        <ul class="!mb-0 mt-4">
          <li>Wie bist Du auf den Beruf des Architekturmodellbaus gekommen?</li>
          <li>Was interessiert Dich an diesem Beruf?</li>
          <li>Warum möchtest Du diesen Beruf eventuell einmal ausüben?</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="md:col-span-8 md:col-start-3 lg:col-span-6 lg:col-start-2">
    <x-misc.imprint />
    <x-misc.privacy />
  </div>
</div>
@endsection
