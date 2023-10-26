<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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

Route::get("/comments/morning", [MessageController::class, "morning"]);

Route::get("/comments/afternoon", [MessageController::class, "afternoon"]);

Route::get("/comments/evening", [MessageController::class, "evening"]);

Route::get("/comments/night", [MessageController::class, "night"]);

Route::get("/comments/freeword/{msg}", [MessageController::class, "word"]);

Route::get("/comments/random", [MessageController::class, 'random']);

