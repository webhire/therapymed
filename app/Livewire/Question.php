<?php

namespace App\Livewire;

use App\Models\Question as Query;
use Illuminate\Support\Arr;
use Livewire\Component;

class Question extends Component
{
    public $answeredQuestions = [];
    public $currentQuestion = 1;
    public $question;

    private $results = [3 => 0, 6 => 1];
    public $result;

    public function render()
    {
        $this->question = $this->getQuestionId($this->currentQuestion);
        return view('livewire.question');
    }

    //main function that resolves answers coming from user
    public function answer($answer)
    {
        $this->answeredQuestions[$this->currentQuestion] = $answer;

        if (Arr::exists($this->results, $this->currentQuestion)) {
            if ($answer == $this->getKey($this->currentQuestion)) {
                $this->result = $this->getResult($this->currentQuestion);
            }
        }

        if ($answer == 1) {
            $this->currentQuestion = $this->nextYesQuestion($this->currentQuestion);
        } elseif ($answer == 0) {
            $this->currentQuestion = $this->nextNoQuestion($this->currentQuestion);
        }
    }

    //gets question for corresponding question key
    private function getQuestionId($questionNumber)
    {
        $questions = [
            1 => 'Question 1: ' . Query::where("id", "1")->pluck('question')->implode(""),
            2 => 'Question 2: ' . Query::where("id", "2")->pluck('question')->implode(""),
            3 => 'Question 3: ' . Query::where("id", "3")->pluck('question')->implode(""),
            4 => 'Question 4: ' . Query::where("id", "4")->pluck('question')->implode(""),
            5 => 'Question 5: ' . Query::where("id", "5")->pluck('question')->implode(""),
            6 => 'Question 6: ' . Query::where("id", "5")->pluck('question')->implode(""),
            7 => 'Question 7: ' . Query::where("id", "6")->pluck('question')->implode(""),
        ];

        return $questions[$questionNumber] ?? null;
    }

    //question key for the next 'yes' answer
    private function nextYesQuestion($questionNumber)
    {
        $nextQuestion = [
            1 => 2,
            2 => 4,
            3 => 6,
            6 => 6,
        ];

        return $nextQuestion[$questionNumber] ?? null;
    }

    //question key for the next 'no' answer
    private function nextNoQuestion($questionNumber)
    {
        $nextQuestion = [
            1 => 3,
            2 => 5,
            3 => 3,
        ];

        return $nextQuestion[$questionNumber] ?? null;
    }

    //refreshes data
    public function refresh()
    {
        $this->currentQuestion = 1;
        $this->answeredQuestions = [];
        $this->result = null;
    }

    //gets previous question
    public function previousQuestion()
    {
        unset($this->answeredQuestions[$this->currentQuestion]);
        $this->currentQuestion = $this->getPreviousQuestion($this->currentQuestion);
    }

    //logic for previous question function
    private function getPreviousQuestion($questionNumber)
    {
        $previousQuestion = null;
        foreach (array_reverse($this->answeredQuestions, true) as $q => $answer) {
            if ($q < $questionNumber) {
                $previousQuestion = $q;
                break;
            }
        }
        return $previousQuestion ?? 1;
    }

    //checks if question's result rely on 'yes' or 'no' answer
    private function getKey($questionId)
    {
        return $this->results[$questionId];
    }

    //gets the results
    private function getResult($question)
    {
        $answers = [3 => "Result for question 3", 6 => "Result for question 6"];
        return $answers[$question];
    }
}
