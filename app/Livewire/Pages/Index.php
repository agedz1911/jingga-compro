<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Jingga - PT. Jingga Pro Utama')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.pages.index');
    }
}
