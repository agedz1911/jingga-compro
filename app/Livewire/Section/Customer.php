<?php

namespace App\Livewire\Section;

use App\Models\Customer as ModelsCustomer;
use Livewire\Component;

class Customer extends Component
{
    public function render()
    {
        $customers = ModelsCustomer::where('is_active', true)->get();
        return view('livewire.section.customer', ['customers' => $customers]);
    }
}
