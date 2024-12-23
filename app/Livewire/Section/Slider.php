<?php

namespace App\Livewire\Section;

use App\Models\HomeSlider;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('is_active', true)->get();
        return view('livewire.section.slider', ['sliders' => $sliders]);
    }
}
