<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question9 extends DeferLoad
{
    public $question;
    public $question9;

    public function mount()
    {
        $this->question = Question::where('id', 19)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question9', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
