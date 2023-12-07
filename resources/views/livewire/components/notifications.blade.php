<div>
   @foreach ($notifications as $noti)
    <div class="cursor-pointer relative flex items-center mt-2" >
        <div class="w-10 h-10 flex-none image-fit mr-1">
            <img alt="{{$noti->name}}" class="rounded-full" src="{{$noti->image}}" />
            <div class="w-3 h-3 absolute right-0 bottom-0 bg-theme-1 border-white rounded-full border-2"></div>
        </div>
        <div class="ml-2 overflow-hidden">
            <div class="flex items-center">
                <a href="javascript:;" class="font-medium truncate mr-5">{{$noti->name}}</a>
                <div class="text-opacity-50 text-gray-800 text-xs ml-auto whitespace-nowrap -mt-0.5"> {{\Carbon\Carbon::parse($noti->created_at)->format('h:m A')}} </div>
            </div>
           
            <div class="text-opacity-70 text-gray-800 dark:text-gray-500 w-full truncate mt-0.5">
                {{$noti->message}}
            </div>
               <div style="margin-left:120px">
                <button  wire:click="acceptRequest({{$noti->sender_id}}, {{$noti->receiver_id  }})"; class="btn btn-outline-primary btn-sm ">Accept</button>
                <button wire:click="declinedRequest({{$noti->id}}, {{$noti->sender_id}}, {{$noti->receiver_id  }});" class="btn btn-outline-danger btn-sm">Decline</button>
               </div>
        </div>
    </div>

    @endforeach

</div>

@section('js')
<script>
    var user = {{\Auth::user()->id}};
     var pusher = new Pusher('bc98d41e55d54e29ac4f', {
        cluster: 'ap2'
    });

    var channel = pusher.subscribe('notification-channel');
    channel.bind('notification-event-'+user, function(data) {
       @this.insertNotification(data);
    });
</script>
@endsection
