<?php

namespace App\Http\Livewire\App\Gender;

use App\Models\BodyPart;
use App\Models\Gender;
use Livewire\Component;

class Index extends Component
{
    public $genders;
    public $bodyParts;

    public function mount()
    {
        $this->genders = Gender::all();
        $this->bodyParts = BodyPart::all();
    }

    public function toIssue($bodyId)
    {
        switch ($bodyId){
            case 1:
                return redirect()->route('man.issue-1');
                break;
            case 2:
                return redirect()->route('man.issue-2');
                break;
            default:
                return redirect()->route('man.issue-3');
        }

    }


    public function render()
    {
        return view('livewire.app.gender.index');
    }
}
