<?php

namespace App\Livewire\Section;

use App\Models\NewsUpdate as ModelsNewsUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('News Update')]
class NewsUpdate extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $newsUpdates = ModelsNewsUpdate::where('is_active', true)->orderBy('created_at', 'desc')->where('title', 'like' , '%' . $this->search . '%')->paginate(20);
        $olderPosts = ModelsNewsUpdate::where('is_active', true)->orderBy('created_at', 'asc')->paginate(10);
        return view('livewire.section.news-update', [
            'newsUpdates' => $newsUpdates,
            'olderPosts' => $olderPosts
        ]);
    }
}
