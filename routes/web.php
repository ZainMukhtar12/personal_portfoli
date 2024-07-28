<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('index');
 });


Route::get('/', [homeController::class, 'index'])->name('index');
Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/about', [homeController::class, 'about'])->name('about');
Route::get('/resume', [homeController::class, 'resume'])->name('resume');
Route::get('/contact', [homeController::class, 'contact'])->name('contact');
Route::get('/project', [homeController::class, 'project'])->name('project');
