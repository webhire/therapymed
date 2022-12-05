<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Dizziness;

use App\Models\Question;

class Question5 extends DeferLoad
{
    public $question;
    public $question5;

    public function mount()
    {
        $this->question = Question::where('id', 35)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.dizziness.question5', ['question' => $this->readyToLoad])->extends('layouts.man.head.dizziness.quiz');
    }
}
