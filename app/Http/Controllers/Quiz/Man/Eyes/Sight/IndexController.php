<?php

namespace App\Http\Controllers\Quiz\Man\Eyes\Sight;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Result;

class IndexController extends Controller
{
    public function __invoke()
    {
        $questions = Question::all();
        $results = Result::all();
        return view('quiz.man_eyes.sight.1', compact('questions', 'results'));
    }
}
