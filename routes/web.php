<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorsiController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

// CRUD

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/store/create', [ArticleController::class, 'store'])->name('article.store');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');