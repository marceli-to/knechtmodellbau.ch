<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('page.home');
Route::view('/portrait', 'pages.portrait')->name('page.portrait');
Route::view('/galerie', 'pages.gallery')->name('page.gallery');
Route::view('/kompetenzen/spektrum', 'pages.competences.spectrum')->name('page.competences.spectrum');
Route::view('/kompetenzen/architekturmodellbau', 'pages.competences.model-making')->name('page.competences.model-making');
Route::view('/kompetenzen/designmodellbau-prototypen-exponate', 'pages.competences.design')->name('page.competences.design');
Route::view('/kompetenzen/signaletik', 'pages.competences.signaletics')->name('page.competences.signaletics');
Route::view('/kontakt', 'pages.contact')->name('page.contact');