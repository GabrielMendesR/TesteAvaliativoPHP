<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::post('/Post/storePost', [PostController::class,'storePost']);
Route::get('/Post/indexPost', [PostController::class, 'indexPost']);
Route::delete('/Post/destroyPost/{id}', [PostController::class, 'destroyPost']);
Route::put('/Post/editPost{id}', [PostController::class, 'editPost']);
Route::get('/Post/showPost{id}', [PostController::class, 'showPost']);
//----------------------------------------------------------------------------------------------------------------------
Route::post('/Post/{id}/storeComment', [CommentController::class, 'storeComment']);
Route::get('/Post/{id}/indexComment', [CommentController::class, 'indexComment']);
Route::delete('/Post/{id}/destroyComment/{id_comments}', [CommentController::class, 'destroyComment']);
Route::put('/Post/{id}/editComment/{id_comments}', [CommentController::class, 'editComment']);
Route::get('/Post/{id}/showComment/{id_comments}', [CommentController::class, 'showComment']);
