<?php

namespace App\Livewire\Frontend\Widgets;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class Header extends Component
{
    public $var;
    public $var1;
    public $var2;
    public $var3;
    
    public function mount()
    {

    }

    // #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.widgets.header');
    }
}