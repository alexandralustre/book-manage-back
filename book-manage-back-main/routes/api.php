<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
Route::get('/books', [BookController::class, 'index']);       // List all books
Route::get('/books/{id}', [BookController::class, 'show']);   // Show book details
Route::post('/books', [BookController::class, 'store']);      // Create a new book
Route::put('/books/{id}', [BookController::class, 'update']); // Update a book
Route::delete('/books/{id}', [BookController::class, 'destroy']); // Delete a book

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

