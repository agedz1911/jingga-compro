<?php

namespace App\Livewire\Section;

use App\Models\Project as ModelsProject;
use Livewire\Component;

class Project extends Component
{
    public function render()
    {
        $projects = ModelsProject::where('is_active', true)->get();
        $years = $projects->pluck('event_year')->unique()->sort()->values();
        return view('livewire.section.project', ['projects' => $projects, 'years' => $years]);
    }
}
