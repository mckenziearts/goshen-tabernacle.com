<?php

use Modules\Event\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Cpanel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('events')->group(function() {
    Route::get('/', [EventController::class, 'index'])->name('events');
    Route::get('/new', [EventController::class, 'create'])->name('events.new');
    Route::get('/show/{event}', [EventController::class, 'show'])->name('events.show');
    Route::get('/edit/{event}', [EventController::class, 'edit'])->name('events.edit');
});