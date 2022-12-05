<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question2 extends DeferLoad
{
    public $question;
    public $question2;

    public function mount()
    {
        $this->question = Question::where('id', 12)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question2', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
