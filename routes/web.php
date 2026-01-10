<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorsiController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');

Route::get('/chi-siamo/dettaglio/{name}', [PublicController::class, 'dettaglioUtente'])->name('dettaglio-utente');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contatti');

Route::get('/corsi', [CorsiController::class, 'corsi'])->name('corsi');

Route::get('/corso/dettaglio/{id}', [CorsiController::class, 'dettaglioCorso'])->name('dettaglio-corso');

// Invio mail

Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');

// Inserimento corso

Route::get('/corsi/creazione', [CorsiController::class, 'creazione'])->name('corsi.creazione')->middleware('auth');

Route::post('/corsi/submit', [CorsiController::class, 'store'])->name('corsi.submit');