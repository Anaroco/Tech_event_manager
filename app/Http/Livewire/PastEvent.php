<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Event;

class PastEvent extends Component
{
    use WithPagination;

    public function render()
    {
        $events = Event::orderBy('date','asc')->where('available', '0')->paginate(10);
        return view('livewire.past-event', compact('events'));
    }
}
