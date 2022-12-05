<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question2 extends DeferLoad
{
    public $question;
    public $question2;

    public function mount()
    {
        $this->question = Question::where('id', 2)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question2', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
