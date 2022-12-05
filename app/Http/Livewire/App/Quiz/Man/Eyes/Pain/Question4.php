<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question4 extends DeferLoad
{
    public $question;
    public $question4;

    public function mount()
    {
        $this->question = Question::where('id', 4)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question4', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
