<?php
/* use App\Http\Controllers\API\FactureController; */

use App\Http\Controllers\API\FournisseurController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\Souscategorie;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('/api/fournisseur',FournisseurController::class);
Route::apiResource('/api/categorie',CategorieController::class);
Route::apiResource('/api/souscategorie',Souscategorie::class);
/* Route::apiResource('/api/Facture',FactureController::class); */
Route::resource('Facture',FactureController::class);

