<?php

namespace App\Http\Livewire\Components;
use  App\Events\ChatEvent;
use Livewire\Component;
use DB;
class ChatFrm extends Component
{
    public $receiver_id;
    public $message = '';
    public function mount($id) {
        $this->receiver_id=$id;
    }
    public function render()
    {
        return view('livewire.components.chat-frm');
    }

    public function storeMessage() {
        DB::table('messages')->insert([
            'conversation__id' => 0,
            'sender_id' => \Auth::user()->id,
            'receiver_id' => $this->receiver_id,
            'message_time' => now(),
            'message' => $this->message,
            'type' => 'text',
        ]);
        $this->message='';
        $this->emitTo('components.chat-messages', 'newMessageSent');
        event(new ChatEvent($this->receiver_id));

    }
}
