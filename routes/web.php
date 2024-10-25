<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('page.home');
Route::get('/portrait', [PageController::class, 'portrait'])->name('page.portrait');
Route::get('/galerie', [PageController::class, 'gallery'])->name('page.gallery');
Route::get('/leistungen', [PageController::class, 'services'])->name('page.services');
Route::get('/kontakt', [PageController::class, 'contact'])->name('page.contact');

