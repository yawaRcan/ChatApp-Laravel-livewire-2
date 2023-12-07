<?php

namespace App\Http\Livewire\Chat;

use App\Events\SendRequestNotification;
use Livewire\Component;
use DB;
class InviteUser extends Component
{
    public $search='';
    public function render()
    {
        $conversations = DB::table('conversation')->where('sender_id', \Auth::user()->id)->pluck('receiver_id');
       
        $users = DB::table('users')
        ->when($this->search, function($query, $search){
            return $query->where('name', 'Like', '%'.$search.'%');
        })
        ->whereNotIn('id', $conversations)
        ->get(['id','name']);

      

        return view('livewire.chat.invite-user', ['users' => $users]);
    }

    public function sendFriendRequest($id, $status) {
       
       if($status) {
        DB::table('conversation')->insert([
            'sender_id' => \Auth::user()->id, 
            'receiver_id' => $id, 
            'last_message' => "Hi! I'd like to be friends. 😊",
            'last_time_message' => now(),
            'created_at' => now(),
        ]);
        event(new SendRequestNotification($id));
       } else {
        DB::table('conversation')->where('receiver_id',$id)->where('sender_id',\Auth::user()->id)->delete();
       }
    }

}
