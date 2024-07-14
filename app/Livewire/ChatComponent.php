<?php

namespace App\Livewire;

use Livewire\Component;

class ChatComponent extends Component
{
    // public $user_id;
    public function mount($user_id)
    {
        dd($user_id);
    }
    public function render()
    {
        return view('livewire.chat-component');
    }
}
