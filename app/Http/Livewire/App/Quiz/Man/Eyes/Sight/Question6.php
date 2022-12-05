<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question6 extends DeferLoad
{
    public $question;
    public $question6;

    public function mount()
    {
        $this->question = Question::where('id', 16)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question6', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
