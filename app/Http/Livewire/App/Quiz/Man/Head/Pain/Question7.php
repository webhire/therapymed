<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Pain;

use App\Models\Question;

class Question7 extends DeferLoad
{
    public $question;
    public $question7;

    public function mount()
    {
        $this->question = Question::where('id', 27)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.question7', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
