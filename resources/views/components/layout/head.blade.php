@php
$siteTitle = trim($__env->yieldContent('site_title'));
$title = $siteTitle ? "$siteTitle – " . __(env('APP_NAME')) : __(env('APP_NAME'));
$description = trim($__env->yieldContent('page_description'));
$description = $description ? $description : __(env('APP_DESCRIPTION'));
@endphp
<!doctype html>
<html lang="de" class="scroll-smooth {{ Route::is('page.home') ? 'overflow-y-auto' : 'overflow-y-scroll' }}" x-data="{ show_menu: false }">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ url()->current()}}">
<meta property="og:site_name" content="{{ $title }}">
<meta property="og:image" content="{{ asset('opengraph.jpg') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:title" content="{{ $title }}">
<meta property="twitter:image" content="{{ asset('opengraph.jpg') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="{{ $title }}" />
<link rel="manifest" href="/site.webmanifest" />
@vite('resources/css/app.css')
</head>

