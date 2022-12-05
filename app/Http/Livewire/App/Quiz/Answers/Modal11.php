<?php

namespace App\Http\Livewire\App\Quiz\Answers;

use App\Models\Result;
use Livewire\Component;

class Modal11 extends Component
{
    public $answer;

    public function mount()
    {
        $this->answer = Result::where('id', 11)->get();
    }

    public function render()
    {
        return view('livewire.app.quiz.answers.modal11');
    }
}
