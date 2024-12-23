<?php

namespace App\Livewire\Section;

use App\Models\AboutUs;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $aboutus = AboutUs::where('is_active', true)->get();
        return view('livewire.section.about', ['aboutus' => $aboutus]);
    }
}
