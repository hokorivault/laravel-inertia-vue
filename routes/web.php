<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Home');
});

// inertia() way
Route::get('/spage', function() {
    return inertia('SpecialPage', ['vtuber' => 'Suiyo']);
});

// Shorthand
Route::inertia('/about', 'About', ['user' => 'Yutorin']);