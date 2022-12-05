<?php

namespace App\Http\Livewire\App\Quiz\Answers;

use App\Models\Result;
use Livewire\Component;

class Modal18 extends Component
{
    public $answer;

    public function mount()
    {
        $this->answer = Result::where('id', 18)->get();
    }


    public function render()
    {
        return view('livewire.app.quiz.answers.modal18');
    }
}
