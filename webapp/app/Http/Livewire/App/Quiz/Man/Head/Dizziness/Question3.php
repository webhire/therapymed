<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Dizziness;

use App\Models\Question;

class Question3 extends DeferLoad
{
    public $question;
    public $question3;

    public function mount()
    {
        $this->question = Question::where('id', 33)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.dizziness.question3', ['question' => $this->readyToLoad])->extends('layouts.man.head.dizziness.quiz');
    }
}
