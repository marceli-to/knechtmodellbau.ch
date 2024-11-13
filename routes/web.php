<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('page.home');
Route::view('/portrait', 'pages.portrait')->name('page.portrait');
Route::view('/galerie', 'pages.gallery')->name('page.gallery');
Route::view('/kompetenzen', 'pages.competences')->name('page.competences');
Route::view('/kontakt', 'pages.contact')->name('page.contact');