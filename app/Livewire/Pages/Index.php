<?php

namespace App\Livewire\Pages;

use App\Models\NewsUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Jingga - PT. Jingga Pro Utama')]
class Index extends Component
{
    public function render()
    {
        $newsUpdates = NewsUpdate::where('is_active', true)->orderBy('created_at', 'desc')->paginate(9);
        return view('livewire.pages.index', ['newsUpdates' => $newsUpdates]);
    }
}
