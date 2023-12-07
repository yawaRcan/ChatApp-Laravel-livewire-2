<?php

namespace App\Http\Livewire\Chat;

use Livewire\Component;
use DB;
class SentRequests extends Component
{
    public $search='';
    public function render()
    {
        $users = DB::table('users')
        ->join('conversation', 'users.id','conversation.receiver_id')
        ->where('conversation.sender_id', \Auth::user()->id)
        ->select('users.name','conversation.*')
        ->orderBy('users.id','DESC')->get();
        return view('livewire.chat.sent-requests', ['users'=>$users]);
    }

    public function deleteRequest($id){
        DB::table('conversation')->where('id',$id)->delete();
    }
}
