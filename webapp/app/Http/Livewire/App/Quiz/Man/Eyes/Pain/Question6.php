<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question6 extends DeferLoad
{
    public $question;
    public $question6;

    public function mount()
    {
        $this->question = Question::where('id', 6)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question6', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
