<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question7 extends DeferLoad
{
    public $question;
    public $question7;

    public function mount()
    {
        $this->question = Question::where('id', 17)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question7', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
