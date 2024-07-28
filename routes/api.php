<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPermissionController;
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


# Has a lot work
Route::post('/login', [AuthController::class, 'login']);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             News Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


//you have pay attention to the routes in  next step

// Route::apiResource("news-categories", NewsCategoryController::class)
//     ->except(['show']);


Route::apiResource("news", NewsController::class);


////////////////////////////////////////////////////////////////////////////////////////////////
//                             Upload file Rooutes                                            //
////////////////////////////////////////////////////////////////////////////////////////////////



Route::post("/upload/{type}", [FileUploadController::class, "store"]);


////////////////////////////////////////////////////////////////////////////////////////////////
//                             Menu Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::apiResource("menus", MenuController::class);

////////////////////////////////////////////////////////////////////////////////////////////////
//                             Page Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::get("pages/{page:menu_id}", [PageController::class, 'show']);

Route::post("pages", [PageController::class, 'store']);


////////////////////////////////////////////////////////////////////////////////////////////////
//                             Slide Rooutes                                                  //
////////////////////////////////////////////////////////////////////////////////////////////////

Route::apiResource("slides", SlideController::class)->except(['show']);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             User Rooutes                                                   //
////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('users/personal-details',[UserController::class,'personalDetails']);
Route::apiResource('users',UserController::class);



////////////////////////////////////////////////////////////////////////////////////////////////
//                             Permission Rooutes                                             //
////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('permissions/personal', [UserPermissionController::class, 'getPermissions'])->middleware('auth:sanctum');

Route::apiResource('permissions', PermissionController::class)->only('index');

////////////////////////////////////////////////////////////////////////////////////////////////
//                           Managa user Permission Rooutes                                   //
////////////////////////////////////////////////////////////////////////////////////////////////


Route::post('permissions/assign', [UserPermissionController::class, 'assignPermssion']);
Route::post('permissions/remove', [UserPermissionController::class, 'removePermission']);



//
