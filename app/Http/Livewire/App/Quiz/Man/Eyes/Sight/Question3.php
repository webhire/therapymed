<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question3 extends DeferLoad
{
    public $question;
    public $question3;

    public function mount()
    {
        $this->question = Question::where('id', 13)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question3', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
