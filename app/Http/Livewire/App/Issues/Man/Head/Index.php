<?php

namespace App\Http\Livewire\App\Issues\Man\Head;

use App\Models\Issue;
use Livewire\Component;

class Index extends Component
{
    public $head_issues;

    public function mount()
    {
        $this->head_issues = $head_issues = Issue::where('body_part_id', 1)->where('gender_id', 1)->get();
    }

    public function render()
    {
        return view('livewire.app.issues.man.head.index');
    }
}
