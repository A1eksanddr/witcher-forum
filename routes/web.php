<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return Inertia::render('Welcome');
//})->name('home');
//
//Route::get('dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//require __DIR__.'/settings.php';
//require __DIR__.'/auth.php';

Route::get('/', fn () => view('main'));
Route::get('/main', fn () => redirect('/'));

Route::get('/gallery', fn () => view('gallery'));
Route::get('/literature', fn () => view('literature'));
Route::get('/memes', fn () => view('memes'));
Route::get('/user', fn () => view('user'));
Route::get('/quotes', fn () => view('quotes'));
Route::get('/guides', fn () => view('guides'));

