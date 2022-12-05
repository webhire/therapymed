<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Pain;

use App\Models\Question;

class Question4 extends DeferLoad
{
    public $question;
    public $question4;

    public function mount()
    {
        $this->question = Question::where('id', 24)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.question4', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
