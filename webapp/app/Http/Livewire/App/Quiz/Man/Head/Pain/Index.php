<?php

namespace App\Http\Livewire\App\Quiz\Man\Head\Pain;

use App\Models\Question;

class Index extends DeferLoad
{
    public $question;
    public $question1;

    public function mount() {
        $this->question = Question::where('id', 21)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.head.pain.index', ['question' => $this->readyToLoad])->extends('layouts.man.head.pain.quiz');
    }
}
