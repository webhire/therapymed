<?php

namespace App\Http\Livewire\App\Quiz\Answers;

use App\Models\Result;
use Livewire\Component;

class Modal34 extends Component
{
    public $answer;

    public function mount()
    {
        $this->answer = Result::where('id', 34)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.answers.modal34');
    }
}
