<?php

use App\Http\Controllers\main\ExerciseController;
use App\Http\Controllers\main\GamesController;
use App\Http\Controllers\main\PPTController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function(){
    Route::prefix('/demo')->group(function(){

        Route::get('/fetch/exercise',[ExerciseController::class, 'getExercise']);
        Route::get('/exercises',[ExerciseController::class, 'listExercise']);

        Route::get('/ppt/{ppt_name}/fetch',[PPTController::class, 'getPPT']);
        Route::get('/ppts',[PPTController::class, 'listPPTs']);

        Route::get('/igames', [GamesController::class, 'listGames']);
        Route::get('/igame/{game_name}/fetch', [GamesController::class, 'getGame']);
    });
});

require __DIR__.'/auth.php';
