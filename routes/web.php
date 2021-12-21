<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home')->middleware('theme:default');
Route::view('/podcasts', 'podcasts')->name('podcasts')->middleware('theme:default');

// Redirect url to protect admin panel
Route::redirectMap([
    '.env' => 'https://www.youtube.com/watch?v=M8ogFbLP9XQ',
    'wp-login' => 'https://www.youtube.com/watch?v=M8ogFbLP9XQ',
    'wp-admin' => 'https://www.youtube.com/watch?v=M8ogFbLP9XQ',
    'youtube' => 'https://www.youtube.com/channel/UCOhyRt-xCcrmbNxu-eT9AOg',
    'facebook' => 'https://www.facebook.com/goshentabernacleofficiel',
    'instagram' => 'https://www.instagram.com/goshentabernacleofficiel',
    'pinterest' => 'https://www.pinterest.com/goshentabernacle',
]);

// Package routes
Route::mediaLibrary();
