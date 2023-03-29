<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CardMagicController;
use App\Http\Controllers\CardMonsterController;
use App\Http\Controllers\CardTrapController;
use Illuminate\Support\Facades\Route;

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

Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['jwt.verify']], function () {

    Route::post('card/monster', [CardMonsterController::class, 'create'])->name('monster.create');
    Route::get('card/monster', [CardMonsterController::class, 'list'])->name('monster.list');
    Route::put('card/monster/{id}', [CardMonsterController::class, 'update'])->name('monster.update');
    Route::delete('card/monster/{id}', [CardMonsterController::class, 'destroy'])->name('monster.delete');
    Route::get('card/monster/{id}', [CardMonsterController::class, 'show'])->name('monster.show');

    Route::post('card/magic', [CardMagicController::class, 'create'])->name('magic.create');
    Route::get('card/magic', [CardMagicController::class, 'list'])->name('magic.list');
    Route::put('card/magic/{id}', [CardMagicController::class, 'update'])->name('magic.update');
    Route::delete('card/magic/{id}', [CardMagicController::class, 'destroy'])->name('magic.delete');
    Route::get('card/magic/{id}', [CardMagicController::class, 'show'])->name('magic.show');

    Route::post('card/trap', [CardTrapController::class, 'create'])->name('trap.create');
    Route::get('card/trap', [CardTrapController::class, 'list'])->name('trap.list');
    Route::put('card/trap/{id}', [CardTrapController::class, 'update'])->name('trap.update');
    Route::delete('card/trap/{id}', [CardTrapController::class, 'destroy'])->name('trap.delete');
    Route::get('card/trap/{id}', [CardTrapController::class, 'show'])->name('trap.show');

    Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

});
