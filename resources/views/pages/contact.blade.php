@extends('app')
@section('site_title', 'Kontakt')
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
    <x-misc.imprint />
    <x-misc.privacy />
  </div>
</div>
@endsection
