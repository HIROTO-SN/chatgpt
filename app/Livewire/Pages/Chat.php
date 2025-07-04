<?php

namespace App\Livewire\Pages;

use App\Models\Conversation;
use Livewire\Component;

class Chat extends Component {

    public Conversation $conversation;

    public function render() {
        return view( 'livewire.pages.chat' );
    }
}
