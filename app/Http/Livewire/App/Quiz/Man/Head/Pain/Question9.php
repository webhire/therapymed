<?php

namespace App\Http\Livewire\App\Quiz\Man\head\pain;

use App\Models\Question;

class Question9 extends DeferLoad
{
    public $question;
    public $question9;

    public function mount()
    {
        $this->question = Question::where('id', 29)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.question9', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
