<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboratorsController;
use App\Http\Controllers\ContractsController;
use App\Http\Controllers\GphContractsController;
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



Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/colaborators',  [ColaboratorsController::class, 'index'])->name('main');
    Route::post('/colaborators',  [ColaboratorsController::class, 'search'])->name('search');
    Route::get('/card/{id}',  [ColaboratorsController::class, 'card'])->name('card');

    Route::get('/recruitmentPage', function () {
        return view('recruitment');
    })->name('recruitmentPage');

    Route::post('/recruitment',  [ColaboratorsController::class, 'recruitment'])->name('recruitment');
    Route::post('/updateCard',  [ColaboratorsController::class, 'update'])->name('update');
    Route::get('/re_recruitment',  [ColaboratorsController::class, 'reRecruitment'])->name('reRecruitment');
    Route::get('/dismiss',  [ColaboratorsController::class, 'dismiss'])->name('dismiss');

    Route::get('/contracts',  [ContractsController::class, 'index'])->name('contracts');
    Route::post('/contracts',  [ContractsController::class, 'search'])->name('search_contracts');

    Route::get('/new_contract', function () {
        return view('newContract');
    })->name('new_contract');
    Route::post('/create_contract',  [ContractsController::class, 'create'])->name('create_contract');

    Route::get('/gph',  [GphContractsController::class, 'index'])->name('gph');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
