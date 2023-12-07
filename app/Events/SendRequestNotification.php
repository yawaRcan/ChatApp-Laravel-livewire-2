<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendRequestNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $userId; 
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->userId=$id;
    }

    public function broadcastOn()
    {
        return ['notification-channel'];
    }

    public function broadcastWith(){
        return [
           'sender_id' => \Auth::user()->id, 
           'receiver_id' => $this->userId,
           'message' => 'want to be friend with you',
           'created_at' => now(),
        ];
    }
  
    public function broadcastAs()
    {
        return 'notification-event-'.$this->userId;
    }

}
