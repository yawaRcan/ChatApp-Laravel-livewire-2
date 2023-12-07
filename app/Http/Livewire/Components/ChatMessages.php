<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use DB;
class ChatMessages extends Component
{
    protected $listeners = ['newMessageSent'];

    public $selectedUserId;
    public function mount($id){
        $this->selectedUserId = $id;
    }

    public function render()
    {
        $messages = DB::table('messages')
        ->where('sender_id', \Auth::user()->id)->where('receiver_id', $this->selectedUserId)
        ->orWhere('receiver_id', \Auth::user()->id)->where('sender_id', $this->selectedUserId)
        ->get();
        return view('livewire.components.chat-messages', ['messages'=>$messages]);
    }

    public function newMessageSent(){
      $this->render();
    }
    
}
