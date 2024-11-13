@extends('app')
@section('site_title', 'Architekturmodellbau – Kompetenzen')
@section('page_title', 'Kompetenzen')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20">
  <x-competence.item 
    :image="[
      'src' => 'knecht_modellbau_kompetenzen_02_architekturmodellbau',
      'alt' => 'Architekturmodellbau',
      'title' => 'Architekturmodellbau',
      'height' => 1200,
      'width' => 789
    ]">
    <h2 class="font-semibold">Gipsgrundlagen für Projektwettbewerbe</h2>
    <p>Bei der Erstellung von Grundlagenmodellen für einen Projektwettbewerb beraten wir Sie gerne bei der Wahl eines geeigneten Modellausschnitt oder Modelleinsatz und beschaffen auf Wunsch die digitalen Daten der amtlichen Vermessung mit Höhenkurven und Gebäuden. Diese Daten werden modellbautechnisch nachbearbeitet. Die Modelldaten werden dem Kunden auf Wunsch als DWG/DXF-Datei zur Verfügung gestellt. Bevor das Urmodell hergestellt wird, erhält der Kunde 3D-Daten des Modells zur Kontrolle. Anhand der nachbearbeiteten Modelldaten wird das Urmodell erstellt, welches zur Herstellung der Negativform dient. Mit Hilfe dieser Negativform werden die Gipsmodelle abgeformt.</p>
    <h2 class="font-semibold">Projektwettbewerbe</h2>
    <p>Die Modellausführung und die Darstellung des Wettbewerbsprojektes werden im Vorfeld mit dem Kunden besprochen. Auf Wunsch findet die Projektbesprechung in unserer Werkstatt oder beim Kunden statt. Auf dieser Grundlage wird das Projekt im Modell umgesetzt. Während des Modellbaus können Anpassungen oder Ergänzungen anhand von Fotos oder direkt vor Ort am Modell besprochen werden. Uns ist wichtig, dass das Wettbewerbsprojekt bei der Modellabgabe genau den Vorstellungen des Auftraggebers entspricht. Bei Bedarf übergeben wir das Wettbewerbsmodell an den Wettbewerbsveranstalter.</p>
    <h2 class="font-semibold">Modell für Baueingabe</h2>
    <p>Auf Wunsch der Bauverwaltung oder aus Interesse der Bauherrschaft erstellen wir kubische Modelle im Massstab 1:500 oder 1:200, welche die Kommunikation und Problemlösung in der Zusammenarbeit mit den Behörden erleichtern. </p>
    <h2 class="font-semibold">Präsentations- und Erläuterungsmodelle</h2>
    <p>Modelle erleichtern die Planung, die Öffentlichkeitsarbeit oder die Präsentation bei Arealüberbauungen, bei städtebaulicher Raumplanung, bei Strassen- und Schienenprojekten und bei Landschaftsprojekten. Das gemeinsam erarbeitete Darstellungskonzept ist sehr unterschiedlich und hängt vom erwarteten Nutzen ab. Mit Effekten wie Licht, Ton und digitalen Animationen kann ein Modell interaktiv gestaltet werden, was dem Betrachter noch mehr Klarheit und positive Emotionen vermittelt. Die Modelle können je nach Kundenwunsch weiss, farbig oder aus Holz sein.</p>
  </x-competence.item>
</div>
@endsection
