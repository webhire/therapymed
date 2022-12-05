<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Dizziness;

use App\Models\Question;

class Question4 extends DeferLoad
{
    public $question;
    public $question4;

    public function mount()
    {
        $this->question = Question::where('id', 34)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.dizziness.question4', ['question' => $this->readyToLoad])->extends('layouts.man.head.dizziness.quiz');
    }
}
