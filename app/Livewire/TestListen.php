<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class TestListen extends Component
{
    public bool $showRed = false;
    public bool $showGreen = false;
    public bool $showBlue = false;

    #[On('showColors')]
    public function showRed(): void
    {
        $this->showRed = true;
    }

    #[On('showColors')]
    public function showGreen(): void
    {
        $this->showGreen = true;
    }

    #[On('showColors')]
    public function showBlue(): void
    {
        $this->showBlue = true;
    }

    public function render()
    {
        return view('livewire.test-listen');
    }
}
