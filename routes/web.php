<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');

Route::get('/chi-siamo/dettaglio/{name}', [PublicController::class, 'dettaglioUtente'])->name('dettaglio-utente');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contatti');

// Invio mail
Route::post('/contact-us', [PublicController::class, 'contactUs'])->name('contactUs');

// Course
Route::get('/course/index', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create')->middleware('auth');
Route::post('/course/store', [CourseController::class, 'store'])->name('course.store')->middleware('auth');
Route::get('/course/show/{course}', [CourseController::class, 'show'])->name('course.show');
Route::get('/course/edit/{course}', [CourseController::class, 'edit'])->name('course.edit');
Route::put('/course/update/{course}', [CourseController::class, 'update'])->name('course.update');
Route::delete('/course/delete/{course}', [CourseController::class, 'destroy'])->name('course.delete');

// Article
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/store/create', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');

// Profilo
Route::get('/user/profile', [PublicController::class, 'profile'])->name('user.profile');