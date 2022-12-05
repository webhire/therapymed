<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Pain;

use App\Models\Question;

class Question6 extends DeferLoad
{
    public $question;
    public $question6;

    public function mount()
    {
        $this->question = Question::where('id', 26)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.question6', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
