<?php

namespace App\Livewire\Frontend\Inc;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class AboutUsLinks extends Component
{
    public $var;
    
    public function mount()
    {

    }

    // #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.inc.about-us-links');
    }
}
