@extends('app')
@section('site_title', 'Spektrum – Kompetenzen')
@section('page_title', 'Kompetenzen')
@section('page_description', 'Umfassende Expertise im modernen Modellbau: Von handwerklichem Geschick über 3D-Konstruktion, CNC-Bearbeitung und 3D-Druck bis hin zu Zerspanung, GFK-Laminierung, Lackierung und Vakuumgiessen. Ergänzt durch Partner für Elektronik, Steuerungs-, Licht- und Medientechnik sowie Oberflächenveredelung und grafische Druckverfahren. Perfekte Lösungen aus einer Hand!')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20">
  <x-competence.item 
    :image="[
      'src' => 'knecht_modellbau_kompetenzen_01_spektrum',
      'alt' => 'Spektrum',
      'title' => 'Spektrum',
      'height' => 1200,
      'width' => 789
    ]">
    <p>Das gesamte Spektrum der für den modernen Modellbau erforderlichen Fähigkeiten gehört zu unseren Kompetenzen. Dazu gehören handwerkliches Geschick, Vorstellungsvermögen, Ideenreichtum, ästhetisches Empfinden, mechanische Kenntnisse, 3D-Konstruktion, Umgang mit konventionellen und CNC-Maschinen und 3D-Druckern. Auch das Zerspanen und 3D-Fräsen von Kunststoff, Aluminium, Holz und Stahl sowie das Schweissen, Löten von Elektronik, GFK-Laminieren, Oberflächenbehandlungen, Lackieren, Vakuumgiessen, Folieren, Gipsabguss bis hin zur Montage gehören zu unseren Kompetenzen.</p>
    <p>Darüber hinaus haben wir langjährige Partner für Elektronik, Steuerungs-, Licht- und Medientechnik, für grafische Druckverfahren und Oberflächenveredelung.</p>
  </x-competence.item>
</div>
@endsection
