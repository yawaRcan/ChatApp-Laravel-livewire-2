<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use DB;

class Notifications extends Component
{
    public function render()
    {
        $notifications = DB::table('notifications')
            ->join('users', 'users.id', 'notifications.sender_id')
            ->select('users.name', 'users.image', 'notifications.*')
            ->where('notifications.receiver_id', \Auth::user()->id)
            ->where('is_read', 0)
            ->orderBy('id', 'DESC')
            ->get();

        return view('livewire.components.notifications', ['notifications' => $notifications]);
    }

    public function insertNotification($data)
    {


        DB::table('notifications')->insert([
            'sender_id' => $data['sender_id'],
            'receiver_id' => $data['receiver_id'],
            'message' => $data['message'],
        ]);

    }

    public function declinedRequest($id, $sender_id, $receiver_id)
    {
        DB::table('conversation')->where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->delete();
        DB::table('notifications')->where('id', $id)->delete();
    }

    public function acceptRequest($sender_id, $receiver_id)
    {
        DB::table('conversation')->where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->update([
            'is_friend' => 1,
        ]);
        DB::table('notifications')->where('sender_id', $sender_id)->where('receiver_id', $receiver_id)->update([
            'is_read=' => 1,
        ]);
    }

}