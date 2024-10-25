@php
$pageTitle = trim($__env->yieldContent('page_title'));
@endphp
<h1 class="font-semibold fixed right-80 md:right-35 lg:right-30 top-27">
  {{ $pageTitle }}
</h1>