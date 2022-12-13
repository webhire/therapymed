<?php

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
    return view('welcome');
})->name('main');

Route::namespace('App\Http\Livewire\App\Gender')->prefix('app')->group(function () {
    Route::get('/', \App\Http\Livewire\App\Gender\Index::class)->name('app.index');
});

Route::namespace('\App\Http\Controllers\Issue')->prefix('man')->group(function () {
    Route::get('head', \App\Http\Controllers\Issue\Man\Head\IndexController::class)->name('man.issue-1');
    Route::get('eyes', \App\Http\Controllers\Issue\Man\Eyes\IndexController::class)->name('man.issue-2');
});

Route::namespace('\App\Http\Controllers\Issue')->prefix('incompleted')->group(function () {
    Route::get('3', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-3');
    Route::get('4', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-4');
    Route::get('5', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-5');
    Route::get('6', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-6');
    Route::get('7', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-7');
    Route::get('8', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-8');
    Route::get('9', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-9');
    Route::get('10', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-10');
    Route::get('11', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-11');
    Route::get('11', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-11');
    Route::get('12', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-12');
    Route::get('13', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-13');
    Route::get('14', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-14');
    Route::get('15', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-15');
    Route::get('16', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-16');
    Route::get('17', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-17');
    Route::get('18', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-18');
    Route::get('19', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-19');
    Route::get('20', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-20');
    Route::get('21', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-21');
    Route::get('22', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-22');
    Route::get('23', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-23');
    Route::get('24', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-24');
    Route::get('25', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-25');
    Route::get('26', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-26');
    Route::get('27', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-27');
    Route::get('28', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-28');
    Route::get('29', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-29');
    Route::get('30', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-30');
    Route::get('31', \App\Http\Controllers\Issue\Incompleted\IndexController::class)->name('man.issue-31');
});

Route::namespace('\App\Http\Livewire\App\Quiz')->group(function () {
    Route::namespace('Man')->prefix('man')->group(function () {
        Route::namespace('Eyes')->prefix('eyes')->group(function () {
            Route::namespace('Pain')->prefix('pain')->group(function () {
                Route::get('/', \App\Http\Livewire\App\Quiz\Man\Eyes\Pain\Index::class)->name('man.quiz-3');
            });
            Route::namespace('Sight')->prefix('sight')->group(function () {
                Route::get('/', \App\Http\Livewire\App\Quiz\Man\Eyes\Sight\Index::class)->name('man.quiz-4');
            });
        });
        Route::namespace('Head')->prefix('head')->group(function () {
            Route::namespace('Pain')->prefix('pain')->group(function () {
                Route::get('/', \App\Http\Livewire\App\Quiz\Man\Head\Pain\Index::class)->name('man.quiz-1');
            });
            Route::namespace('Dizziness')->prefix('dizziness')->group(function () {
                Route::get('/', \App\Http\Livewire\App\Quiz\Man\Head\Dizziness\Index::class)->name('man.quiz-2');
            });
        });
    });
});
