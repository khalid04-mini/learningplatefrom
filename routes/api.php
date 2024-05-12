<?php

use App\Http\Controllers\CentreController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\FormateurController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\SalleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('/formations',FormationController::class);
Route::apiResource('/formateurs',FormateurController::class);
Route::apiResource('/centres',CentreController::class);
Route::apiResource('/salles',SalleController::class);
Route::apiResource('/participants',ParticipantController::class);
Route::apiResource('/inscriptions',InscriptionController::class);
Route::apiResource('/paiements',\App\Http\Controllers\PaiementController::class);
Route::apiResource('/commentaires',CommentaireController::class);
