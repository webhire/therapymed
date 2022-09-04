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

Route::namespace('\App\Http\Controllers\App')->prefix('app')->group(function () {
    Route::get('/', \App\Http\Controllers\App\IndexController::class)->name('app.index');
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

Route::namespace('\App\Http\Controllers\Quiz\Man')->prefix('man')->group(function () {
    Route::namespace('\App\Http\Controllers\Quiz\Man\Eyes')->prefix('eyes')->group(function () {
        Route::namespace('\App\Http\Controllers\Quiz\Man\Eyes\Pain')->prefix('pain/quiz')->group(function () {
            Route::get('/', \App\Http\Controllers\Quiz\Man\Eyes\Pain\IndexController::class)->name('man.quiz-3');
            Route::post('/2', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'toSecondQuestion'])->name('man.eyes.pain.quiz.1.store');
            Route::post('/3', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'secondQuestion'])->name('man.eyes.pain.quiz.2.store');
            Route::post('/4', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'thirdQuestion'])->name('man.eyes.pain.quiz.3.store');
            Route::post('/5', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'fourthQuestion'])->name('man.eyes.pain.quiz.4.store');
            Route::post('/6', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'fifthQuestion'])->name('man.eyes.pain.quiz.5.store');
            Route::post('/7', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'sixthQuestion'])->name('man.eyes.pain.quiz.6.store');
            Route::post('/8', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'seventhQuestion'])->name('man.eyes.pain.quiz.7.store');
            Route::post('/9', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'ninthQuestion'])->name('man.eyes.pain.quiz.9.store');
            Route::post('/10', [\App\Http\Controllers\Quiz\Man\Eyes\Pain\QuizController::class, 'tenthQuestion'])->name('man.eyes.pain.quiz.10.store');
        });

        Route::namespace('\App\Http\Controllers\Quiz\Man\Eyes\Sight')->prefix('sight/quiz')->group(function () {
            Route::get('/', \App\Http\Controllers\Quiz\Man\Eyes\Sight\IndexController::class)->name('man.quiz-4');
            Route::post('/2', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'toSecondQuestion'])->name('man.eyes.sight.quiz.1.store');
            Route::post('/3', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'secondQuestion'])->name('man.eyes.sight.quiz.2.store');
            Route::post('/4', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'thirdQuestion'])->name('man.eyes.sight.quiz.3.store');
            Route::post('/5', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'fourthQuestion'])->name('man.eyes.sight.quiz.4.store');
            Route::post('/6', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'fifthQuestion'])->name('man.eyes.sight.quiz.5.store');
            Route::post('/7', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'sixthQuestion'])->name('man.eyes.sight.quiz.6.store');
            Route::post('/8', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'seventhQuestion'])->name('man.eyes.sight.quiz.7.store');
            Route::post('/9', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'ninthQuestion'])->name('man.eyes.sight.quiz.9.store');
            Route::post('/10', [\App\Http\Controllers\Quiz\Man\Eyes\Sight\QuizController::class, 'tenthQuestion'])->name('man.eyes.sight.quiz.10.store');
        });

    });
    Route::namespace('\App\Http\Controllers\Quiz\Man\Head')->prefix('head')->group(function () {
        Route::namespace('\App\Http\Controllers\Quiz\Man\Head\Pain')->prefix('pain/quiz')->group(function () {
            Route::get('/', \App\Http\Controllers\Quiz\Man\Head\Pain\IndexController::class)->name('man.quiz-1');
            Route::post('/2', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'toSecondQuestion'])->name('man.head.pain.quiz.1.store');
            Route::post('/3', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'secondQuestion'])->name('man.head.pain.quiz.2.store');
            Route::post('/4', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'thirdQuestion'])->name('man.head.pain.quiz.3.store');
            Route::post('/5', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'fourthQuestion'])->name('man.head.pain.quiz.4.store');
            Route::post('/6', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'fifthQuestion'])->name('man.head.pain.quiz.5.store');
            Route::post('/7', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'sixthQuestion'])->name('man.head.pain.quiz.6.store');
            Route::post('/8', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'seventhQuestion'])->name('man.head.pain.quiz.7.store');
            Route::post('/9', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'eighthQuestion'])->name('man.head.pain.quiz.8.store');
            Route::post('/10', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'ninthQuestion'])->name('man.head.pain.quiz.9.store');
            Route::post('/11', [\App\Http\Controllers\Quiz\Man\Head\Pain\QuizController::class, 'tenthQuestion'])->name('man.head.pain.quiz.10.store');
        });

        Route::namespace('\App\Http\Controllers\Quiz\Man\Head\Dizziness')->prefix('dizziness/quiz')->group(function () {
            Route::get('/', \App\Http\Controllers\Quiz\Man\Head\Dizziness\IndexController::class)->name('man.quiz-2');
            Route::post('/2', [\App\Http\Controllers\Quiz\Man\Head\Dizziness\QuizController::class, 'toSecondQuestion'])->name('man.head.dizziness.quiz.1.store');
            Route::post('/3', [\App\Http\Controllers\Quiz\Man\Head\Dizziness\QuizController::class, 'secondQuestion'])->name('man.head.dizziness.quiz.2.store');
            Route::post('/4', [\App\Http\Controllers\Quiz\Man\Head\Dizziness\QuizController::class, 'thirdQuestion'])->name('man.head.dizziness.quiz.3.store');
            Route::post('/5', [\App\Http\Controllers\Quiz\Man\Head\Dizziness\QuizController::class, 'fourthQuestion'])->name('man.head.dizziness.quiz.4.store');
            Route::post('/6', [\App\Http\Controllers\Quiz\Man\Head\Dizziness\QuizController::class, 'fifthQuestion'])->name('man.head.dizziness.quiz.5.store');
        });

    });

});

