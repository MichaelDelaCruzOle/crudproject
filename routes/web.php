<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegAccountController;
use App\Http\Controllers\CompanyController;
 
Route::get('login', [RegAccountController::class, 'index'])->name('login');
Route::post('post-login', [RegAccountController::class, 'postLogin'])->name('login.post'); 
Route::resource('companies', CompanyController::class);
Route::get('registration', [RegAccountController::class, 'registration'])->name('register');
Route::get('logout', [RegAccountController::class, 'logout'])->name('logout');
Route::post('post-registration', [RegAccountController::class, 'postRegistration'])->name('register.post'); 