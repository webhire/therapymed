<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question5 extends DeferLoad
{
    public $question;
    public $question5;

    public function mount()
    {
        $this->question = Question::where('id', 5)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question5', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
