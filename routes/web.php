<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionsController;
use App\Models\Formations;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminManagerController;
use App\Http\Controllers\Admin\FormationsController;

Route::get('/', fn() => redirect()->route('admin.login'));
Route::view('/formations', 'formations');
Route::view('/contact', 'contact');
Route::get('/inscription', function () {
    $formations = Formations::all();
    return view('inscription', compact('formations'));
})->name('inscription.form');
Route::post('/inscription', [InscriptionsController::class, 'store'])->name('inscription.store');

Route::get('/admin/inscriptions', [AdminsController::class, 'inscriptions'])->name('admin.inscriptions');

Route::put('/admin/inscriptions/{id}/statut', [AdminsController::class, 'updateStatut'])->name('admin.inscriptions.updateStatut');


Route::get('/admin/inscriptions/{id}', [AdminsController::class, 'show'])->name('admin.inscriptions.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/admins/create', [AdminManagerController::class, 'create'])->name('admins.create');
    Route::get('/admins/{id}/edit', [AdminManagerController::class, 'edit'])->name('admins.edit');

    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/admins', [AdminManagerController::class, 'store'])->name('admins.store');

    Route::put('/admins/{id}', [AdminManagerController::class, 'update'])->name('admins.update');

    Route::delete('/admins/{id}', [AdminManagerController::class, 'destroy'])->name('admins.destroy');



    Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/admins', [AdminManagerController::class, 'index'])->name('admins.index');

    // ✅ Blocs des routes formations PROTÉGÉES
    Route::prefix('formations')->name('admin.formations.')->group(function () {
        Route::get('/', [FormationsController::class, 'index'])->name('index');
        Route::get('/create', [FormationsController::class, 'create'])->name('create');
        Route::post('/', [FormationsController::class, 'store'])->name('store');
        Route::get('/{formation}/edit', [FormationsController::class, 'edit'])->name('edit');
        Route::put('/{formation}', [FormationsController::class, 'update'])->name('update');
        Route::delete('/{formation}', [FormationsController::class, 'destroy'])->name('destroy');
    });
});

});

