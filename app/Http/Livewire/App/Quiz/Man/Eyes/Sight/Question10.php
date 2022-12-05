<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;

use App\Models\Question;

class Question10 extends DeferLoad
{
    public $question;
    public $question10;

    public function mount()
    {
        $this->question = Question::where('id', 20)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.man.eyes.sight.question10', ['question' => $this->readyToLoad])->extends('layouts.man.eyes.sight.quiz');
    }
}
