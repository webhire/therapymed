<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Dizziness;

use App\Models\Question;

class Question2 extends DeferLoad
{
    public $question;
    public $question2;

    public function mount()
    {
        $this->question = Question::where('id', 32)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.dizziness.question2', ['question' => $this->readyToLoad])->extends('layouts.man.head.dizziness.quiz');
    }
}
