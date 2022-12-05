<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Index extends DeferLoad
{
    public $question;
    public $question1;

    public function mount()
    {
        $this->question = Question::where('id', 11)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.index', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
