<?php

namespace App\Livewire\Section;

use App\Models\Testimonial as ModelsTestimonial;
use Livewire\Component;

class Testimonial extends Component
{
    public function render()
    {
        $testimonials = ModelsTestimonial::where('is_active', true)->orderBy('created_at', 'desc')->get();
        return view('livewire.section.testimonial', ['testimonials' => $testimonials]);
    }
}
