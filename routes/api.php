<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\controllers\UserController;
use App\Http\controllers\LanguageController;
use App\Http\controllers\WorkController;
use App\Http\controllers\ProfileController;
use App\Http\controllers\LibraryController;
use App\Http\controllers\WordController;
use App\Http\controllers\FavoriteController;
use App\Http\controllers\InvestigateController;

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

Route::prefix("v1/investigate")->group(function(){
    Route::get("/libraryname",[InvestigateController::class,"searchLibraryByName"]);
    Route::get("/librarylanguage",[InvestigateController::class,"searchLibraryByLanguage"]);
    Route::get("/wordname",[InvestigateController::class,"searchWordByName"]);
    Route::get("/userid",[InvestigateController::class,"searchIdByUid"]);
    Route::get("/favoritelist",[InvestigateController::class,"searchFavoriteByUser"]);

});


Route::apiResource("/v1/user",UserController::class);
Route::apiResource("/v1/language",LanguageController::class);
Route::apiResource("/v1/work",WorkController::class);
Route::apiResource("/v1/profile",ProfileController::class);
Route::apiResource("/v1/library",LibraryController::class);
Route::apiResource("/v1/word",WordController::class);
Route::apiResource("/v1/favorite",FavoriteController::class);

