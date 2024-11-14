<?php

namespace App\Livewire\Frontend\Inc;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class SheduleAppointmentScripts extends Component
{
    public $var;
    
    public function mount()
    {

    }

    // #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.inc.shedule-appointment-scripts');
    }
}
