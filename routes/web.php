<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionsController;
use App\Models\Formations;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminManagerController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/inscription', [InscriptionsController::class, 'create'])->name('inscription.form');
Route::post('/inscription', [InscriptionsController::class, 'store'])->name('inscription.store');

// Auth admin
Route::get('/admin/login', [AdminsController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminsController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminsController::class, 'logout'])->name('admin.logout');

// Admin espace
Route::middleware('auth')->group(function () {
    Route::get('/admin/inscriptions', [AdminsController::class, 'index'])->name('admin.inscriptions');
    Route::post('/admin/inscriptions/{id}/valider', [AdminsController::class, 'valider'])->name('admin.inscriptions.valider');
    Route::post('/admin/inscriptions/{id}/refuser', [AdminsController::class, 'refuser'])->name('admin.inscriptions.refuser');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::prefix('formations')->group(function () {
    Route::get('bureautique', [FormationsController::class, 'bureautique'])->name('formations.bureautique');
    Route::get('cybersecurite', [FormationsController::class, 'cybersecurite'])->name('formations.cybersecurite');
    Route::get('programmation', [FormationsController::class, 'programmation'])->name('formations.programmation');
    Route::get('outils-collaboratifs', [FormationsController::class, 'outilsCollaboratifs'])->name('formations.outils');
});
