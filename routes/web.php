<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\HopitalsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MedecinsController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\PharmaciesController;
use App\Http\Controllers\RegisterController;


// juste des propostions mai forcement il y'aura des modifications  a effectué

Route::get('/', [AccueilController::class ,'acceuil'])->name('accueil');

Route::get('/hopital', [HopitalsController::class ,'hopital'])->name('hopital');

Route::get('/pharmacie', [PharmaciesController::class ,'pharmacie'])->name('pharmacie');

Route::get('/apropos', [AproposController::class ,'apropos'])->name('apropos');

Route::get('/login', [LoginController::class ,'login'])->name('login');
Route::post('/login',[LoginController::class , 'authenticate']);


Route::get('/register', [RegisterController::class ,'register'])->name('register');
Route::post('/register',[RegisterController::class,'validateInscription']);

Route::get('/patient', [PatientsController::class ,'patient'])->name('patient');

Route::get('/medecin', [MedecinsController::class ,'medecin'])->name('medecin');






