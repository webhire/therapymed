<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question8 extends DeferLoad
{
    public $question;
    public $question8;

    public function mount()
    {
        $this->question = Question::where('id', 18)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question8', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
