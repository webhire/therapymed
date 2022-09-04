<?php

namespace App\Http\Controllers\Quiz\Man\Head\Dizziness;

use App\Http\Controllers\Controller;
use App\Http\Requests\Quiz\QuizRequest;
use App\Models\Question;
use App\Models\Result;


class QuizController extends Controller
{
    public function toSecondQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] == 1) {
            return view('quiz.man_head.dizziness.2', compact('questions', 'results'));
        } else {
            return view('quiz.man_head.dizziness.3', compact('questions', 'results'));
        }
    }

    public function secondQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        /*$data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_head.dizziness.3', compact('questions', 'results'));
        }*/
    }

    public function thirdQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_head.dizziness.4', compact('questions', 'results'));
        }
    }

    public function fourthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_head.dizziness.5', compact('questions', 'results'));
        }
    }

}
