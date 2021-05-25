<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieProduitController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CategorieBoutiqueController;
use App\Http\Controllers\AvisController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ProduitBoutiqueController;
use App\Http\Controllers\UserController;
use App\Models\ProduitBoutique;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
|--------------------------------------------------------------------------
| API Produits
|--------------------------------------------------------------------------
*/

Route::post('Produit/createAndSave', [ProduitController::class, 'createAndSave']);
Route::get('Produit/index', [CategorieBoutiqueController::class, 'index']);
Route::put('Produit/update/{id}', [ProduitController::class, 'update']);
Route::delete('Produit/destroy/{id}', [ProduitController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| API CategorieProduits
|--------------------------------------------------------------------------
*/
Route::post('CategorieProduit/createAndSave', [CategorieProduitController::class, 'createAndSave']);
Route::get('CategorieProduit/index', [CategorieBoutiqueController::class, 'index']);
Route::put('CategorieProduit/update/{id}', [CategorieProduitController::class, 'update']);
Route::delete('CategorieProduit/destroy/{id}', [CategorieProduitController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| API Boutique
|--------------------------------------------------------------------------
*/

Route::post('Boutique/createAndSave', [BoutiqueController::class, 'createAndSave']);
Route::get('Boutique/index', [BoutiqueController::class, 'index']);
Route::put('Boutique/update/{id}', [BoutiqueController::class, 'update']);
Route::delete('Boutique/destroy/{id}', [BoutiqueController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| API CategorieBoutique
|--------------------------------------------------------------------------
*/

Route::post('CategorieBoutique/createAndSave', [CategorieBoutiqueController::class, 'createAndSave']);
Route::get('CategorieBoutique/index', [CategorieBoutiqueController::class, 'index']);
Route::put('CategorieBoutique/update/{id}', [CategorieBoutiqueController::class, 'update']);
Route::delete('CategorieBoutique/destroy/{id}', [CategorieBoutiqueController::class, 'destroy']);
/*
|--------------------------------------------------------------------------
| API Avis
|--------------------------------------------------------------------------
*/
Route::post('avis/createAndSave', [AvisController::class, 'createAndSave']);
Route::put('avis/update/{id}', [AvisController::class, 'update']);
Route::delete('avis/destroy/{id}', [AvisController::class, 'destroy']);
/*
|--------------------------------------------------------------------------
| API User
|--------------------------------------------------------------------------
*/
Route::post('user/createAndSave', [UserController::class, 'createAndSave']);
Route::put('user/update/{id}', [UserController::class, 'update']);
Route::delete('user/destroy/{id}', [UserController::class, 'destroy']);
/*
|--------------------------------------------------------------------------
| API Commande
|--------------------------------------------------------------------------
*/
Route::post('commande/createAndSave', [CommandeController::class, 'createAndSave']);
Route::put('commande/update/{id}', [CommandeController::class, 'update']);
Route::delete('commande/destroy/{id}', [CommandeController::class, 'destroy']);

/*
|--------------------------------------------------------------------------
| API ProduitBoutique
|--------------------------------------------------------------------------
*/
Route::post('ProduitBoutique/createAndSave', [ProduitBoutiqueController::class, 'createAndSave']);
Route::put('ProduitBoutique/update/{id}', [ProduitBoutiqueController::class, 'update']);
Route::delete('ProduitBoutique/destroy/{id}', [ProduitBoutiqueController::class, 'destroy']);




