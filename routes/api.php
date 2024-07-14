<?php

use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\SlideController;
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


//Upload file route
Route::post("/upload/{type}", [FileUploadController::class, "store"]);



//Menu section

Route::apiResource("menus", MenuController::class);


Route::get("pages/{page:menu_id}", [PageController::class, 'show']);

Route::post("pages", [PageController::class, 'store']);


//Slide
Route::apiResource("slides", SlideController::class)->except(['show']);

//
