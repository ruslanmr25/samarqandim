<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsImageController;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



Route::apiResource("news-categories", NewsCategoryController::class);


Route::apiResource("news", NewsController::class);
Route::post("/news/upload", [NewsImageController::class, "store"]);



//Menu section

Route::apiResource("menus", MenuController::class);


Route::get("pages/{page:menu_id}", [PageController::class, 'show']);

Route::post("pages", [PageController::class, 'store']);
//
