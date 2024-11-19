<?php

namespace App\Livewire\Frontend;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactUs extends Component
{

    public $name, $location, $message;

    public function sendMessage()
    {
        $msg = "Hi Cleaning agent, I am *$this->name*, I’m currently at *$this->location*, and was referred from the 21 Cleaning Solutions portal. I’m interested in a custom service and would love to discuss details. Here’s what I need: *$this->message*";
        return redirect('https://wa.me/2348108056298?text=' . $msg);
    }

    #[Layout('layouts.frontend')]
    public function render()
    {
        return view('frontend.contact-us');
    }
}
