<?php

namespace App\Http\Livewire\App\Quiz\Man\Eyes\Sight;
use Livewire\Component;

class DeferLoad extends Component
{
    public $readyToLoad = false;

    public function deferLoad()
    {
        $this->readyToLoad = true;
    }

}
