<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Component;

class HomePage extends Component
{
    public $var;
    
    public function mount()
    {

    }

    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.home-page');
    }
}