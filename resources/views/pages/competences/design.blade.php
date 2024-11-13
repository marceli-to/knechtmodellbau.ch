@extends('app')
@section('site_title', 'Designmodellbau / Prototypen / Exponate – Kompetenzen')
@section('page_title', 'Kompetenzen')
@section('content')
<div class="flex flex-col md:grid md:grid-cols-12 md:gap-x-20">
  <x-competence.item 
    :image="[
      'src' => 'knecht_modellbau_kompetenzen_03_designmodellbau-protoypen-exponate',
      'alt' => 'Designmodellbau / Prototypen / Exponate',
      'title' => 'Designmodellbau / Prototypen / Exponate',
      'height' => 1200,
      'width' => 789
    ]">
    <h2 class="font-semibold">Designmodelle / Prototypen</h2>
    <p>Designmodellbau und Prototypen sind zentrale Elemente im Entwicklungsprozess. Sie erleichtern die Präsentation eines Produkts auf einer Messe, bei der Geschäftsleitung, bei potenziellen Investoren oder Kunden. Der Designmodellbau konzentriert sich auf die Visualisierung von ästhetischen Aspekten, Proportionen und Materialwahl, um Ideen klar zu kommunizieren. Prototypen hingegen dienen dazu, die Funktionalität und Leistung eines Produkts zu testen und potenzielle Investoren zu überzeugen. Beide Schritte sind eng miteinander verbunden, um sicherzustellen, dass das Design ansprechend und die Funktionalität effizient ist. Mit Hilfe von Elektronik, Medien- und Lichttechnik können die Modelle animiert und gesteuert werden.</p>
    <h2 class="font-semibold">Exponate / Displays</h2>
    <p>Exponate und Displays werden als Blickfang oder zur Veranschaulichung in Ausstellungen, Messen und Empfangsbereichen eingesetzt. Diese Modelle werden meist mit Hilfe von Steuerungen, Motoren, Licht, Ton und Bildschirmen animiert, um einen Prozess zu erklären. Auf Wunsch werden auch Sockel, Schutzhauben und Transportkisten sowie die Organisation des Transports angeboten.</p>
    <h2 class="font-semibold">Awards / Kunst</h2>
    <p>Ehrungen und Auszeichnungen sind etwas Besonderes, weshalb auch der Award einzigartig sein sollte. Wir fertigen individuelle Pokale und Awards für Ehrungen. Zudem setzen wir Kunstideen ganz nach den Wünschen unserer Kunden um.</p>
  </x-competence.item>
</div>
@endsection