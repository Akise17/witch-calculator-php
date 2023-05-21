<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WitchCalculatorController;

Route::redirect('/', '/witch-calculator');

Route::get('/witch-calculator', [WitchCalculatorController::class, 'index']);
Route::post('/calculate-average-kills', [WitchCalculatorController::class, 'calculateAverageKills']);
Route::get('/witch-calculator/result', [WitchCalculatorController::class, 'result'])->name('witch_calculator_result');

Route::fallback(function () {
    return redirect('/witch-calculator');
});

