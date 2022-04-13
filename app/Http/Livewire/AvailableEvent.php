<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class AvailableEvent extends Component
{
    
    use WithPagination;

    public function render()
    {
        $events = Event::orderBy('date','asc')->where('available', '1')->paginate(10);
        return view('livewire.available-event', compact('events'));
    }
}

