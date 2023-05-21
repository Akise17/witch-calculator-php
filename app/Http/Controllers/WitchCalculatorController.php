<?php

namespace App\Http\Controllers;

use App\Services\WitchCalculatorService;
use Illuminate\Http\Request;

class WitchCalculatorController extends Controller
{
    public function index()
    {
        return view('witch_calculator/index');
    }

    public function calculateAverageKills(Request $request)
    {
        $calculator = new WitchCalculatorService($request->input('persons'));
        return redirect()->secure(route('witch_calculator_result', ['average_kills' => $calculator->calculateAverageKills()]));
    }

    public function result(Request $request)
    {
        $average_kills = $request->input('average_kills');
        return view('witch_calculator/result', compact('average_kills'));
    }
}
