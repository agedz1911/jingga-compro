<?php

namespace App\Livewire\Section;

use App\Models\NewsUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('News Update')]
class NewsUpdateDetail extends Component
{
    public $id;
    public $news;
    public $search;

    public function mount($id)
    {
        $this->id = $id;
        $this->news = NewsUpdate::findOrFail($id);
    }

    public function render()
    {
        $newsUpdates =  NewsUpdate::where('is_active', true)->orderBy('created_at', 'desc')->where('title', 'like' , '%' . $this->search . '%')->paginate(5);
        return view('livewire.section.news-update-detail',[
            'newsUpdates' => $newsUpdates
        ]);
    }
}
