<?php

namespace App\Http\Livewire\App\Issues\Man\Eyes;

use App\Models\Issue;
use Livewire\Component;

class Index extends Component
{
    public $eye_issues;

    public function mount()
    {
        $this->eye_issues = Issue::where('body_part_id', 2)->where('gender_id', 1)->get();
    }

    public function render()
    {
        return view('livewire.app.issues.man.eyes.index');
    }
}
