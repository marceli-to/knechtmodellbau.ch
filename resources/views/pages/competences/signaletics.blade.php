@extends('app')
@section('site_title', 'Signaletik – Kompetenzen')
@section('page_title', 'Kompetenzen')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20">
  <x-competence.item 
    :image="[
      'src' => 'knecht_modellbau_kompetenzen_04_signaletik',
      'alt' => 'Signaletik',
      'title' => 'Signaletik',
      'height' => 1200,
      'width' => 789
    ]">
    <h2 class="font-semibold">Signaletik</h2>
    <p>Signaletik umfasst hochwertige Beschriftungen und visuelle Hinweise für verschiedene Anwendungen. Unsere Dienstleistung umfasst die Herstellung und Montage von hochwertigen dreidimensionalen Beschriftungen aus einer Vielzahl von Materialien und Oberflächen. Ziel ist es, die Kommunikation zu verbessern und das Benutzererlebnis in Ausstellungen, öffentlichen Räumen oder bei Veranstaltungen zu optimieren.</p>
  </x-competence.item>
</div>
@endsection
