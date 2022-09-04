<?php

namespace App\Http\Controllers\Quiz\Man\Eyes\Sight;

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
        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.2', compact('questions', 'results'));
        }
    }

    public function secondQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] == 1) {
            return view('quiz.man_eyes.sight.3', compact('questions', 'results'));
        } else {
            return view('quiz.man_eyes.sight.7', compact('questions', 'results'));
        }
    }

    public function thirdQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.4', compact('questions', 'results'));
        }
    }

    public function fourthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.5', compact('questions', 'results'));
        }
    }

    public function fifthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.6', compact('questions', 'results'));
        }
    }

    public function sixthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

     /*   $data = $request->validated();
        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.7', compact('questions', 'results'));
        }*/
    }

    public function seventhQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();
        if ($data['answer'] == 1) {
            return view('quiz.man_eyes.sight.8', compact('questions', 'results'));
        } else {
            return view('quiz.man_eyes.sight.9', compact('questions', 'results'));
        }
    }

    public function ninthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();

        if ($data['answer'] == 1) {
            return view('quiz.man_eyes.sight.10', compact('questions', 'results'));
        }
    }

    public function tenthQuestion(QuizRequest $request)
    {
        $questions = Question::all();
        $results = Result::all();

        $data = $request->validated();

        if ($data['answer'] != 1) {
            return view('quiz.man_eyes.sight.10', compact('questions', 'results'));
        }
    }
}
