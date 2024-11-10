<?php

namespace App\Livewire\Frontend\Widgets;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class WhoWeAre extends Component
{
    public $var;
    
    public function mount()
    {

    }

    // #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.widgets.who-we-are');
    }
}
