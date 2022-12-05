<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Pain;

use App\Models\Question;

class Question10 extends DeferLoad
{
    public $question;
    public $question10;

    public function mount()
    {
        $this->question = Question::where('id', 30)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.question10', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
