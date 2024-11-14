<?php

namespace App\Livewire\Frontend\Inc;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePageScripts extends Component
{
    public $var;
    
    public function mount()
    {

    }

    // #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.inc.home-page-scripts');
    }
}
