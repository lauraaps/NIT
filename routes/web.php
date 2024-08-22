<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormPageController;
use App\Http\Controllers\DashboardController;


//Home page
Route::get('/',[UserController::class,'getLoginPage'])->name('homePage');
Route::get('/homePage',[UserController::class,'getLoginPage'])->name('homePage');
Route::post('/login',[UserController::class, "login"]);
//aboutus
Route::get('/AboutUsPage', [UserController::class, 'aboutUs'])->name('AboutUsPage');
//form create user
Route::get('/FormPage',[UserController::class, 'form'])->name('FormPage');
// users table
Route::get('/users', [UserController::class, 'users'])->name('users.index');
// User view card
Route::get('/userView/{id}',[UserController::class, 'userShow'])->name('user.show');
// users actions
Route::post('/users/store',[UserController::class, 'store'])->name('user.store');
Route::post('/users/{user}', [UserController::class, 'edit'])->name('users.update');
Route::put('/user/{id}/update', [UserController::class, 'update'])->name('user.update');
Route::get('/users/{user}/delete', [UserController::class, 'destroy'])->name('users.destroy');
// logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');













