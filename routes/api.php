<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SlideController;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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



////////////////////////////////////////////////////////////////////////////////////////////////
//                             Auth Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::post('/enter', [AuthController::class, 'login']);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             Comments Rooutes                                               //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::apiResource("/comments", CommentController::class);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             News Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


//you have to pay attention to the routes in  next step

Route::apiResource("news-categories", NewsCategoryController::class)
    ->only(['index']);

Route::apiResource("news", NewsController::class);

////////////////////////////////////////////////////////////////////////////////////////////////
//                               Announcement Rooutes                                         //
////////////////////////////////////////////////////////////////////////////////////////////////



Route::apiResource("articles", ArticleController::class);


////////////////////////////////////////////////////////////////////////////////////////////////
//                               Slides       Rooutes                                         //
////////////////////////////////////////////////////////////////////////////////////////////////

Route::apiResource("slides", SlideController::class);

////////////////////////////////////////////////////////////////////////////////////////////////
//                               Expeditions       Rooutes                                         //
////////////////////////////////////////////////////////////////////////////////////////////////

Route::apiResource("expeditions", ExpeditionController::class);


////////////////////////////////////////////////////////////////////////////////////////////////
//                             Upload file Rooutes                                            //
////////////////////////////////////////////////////////////////////////////////////////////////



Route::post("/upload/{type}", [FileUploadController::class, "store"]);


////////////////////////////////////////////////////////////////////////////////////////////////
//                             Slide Rooutes                                                  //
////////////////////////////////////////////////////////////////////////////////////////////////

// Route::apiResource("slides", SlideController::class);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             User Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('profile', [ProfileController::class, 'profile']);
Route::put('profile', [ProfileController::class, 'update']);

Route::apiResource('users', UserController::class);
