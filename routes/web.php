<?php

use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\AnimalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ClinicController::class, 'list'])->name('homepage.list');

Route::get('/search', [ClinicController::class, 'search'])->name('search');

Route::get('/{animalId}/showAnimal', [AnimalController::class, 'showAnimal'])->name('showAnimal');

Route::get('/{ownerId}/showOwner', [OwnerController::class, 'showOwner'])->name('owner.showOwner');
