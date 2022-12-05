<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Pain;

use App\Models\Question;

class Question9 extends DeferLoad
{
    public $question;
    public $question9;

    public function mount()
    {
        $this->question = Question::where('id', 9)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.pain.question9', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.pain.quiz');
    }
}
