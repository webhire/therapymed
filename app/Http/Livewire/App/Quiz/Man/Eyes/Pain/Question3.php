<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question3 extends DeferLoad
{
    public $question;
    public $question3;

    public function mount()
    {
        $this->question = Question::where('id', 3)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question3', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
