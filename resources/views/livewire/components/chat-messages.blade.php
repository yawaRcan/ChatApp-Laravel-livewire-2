<div>
    @foreach($messages as $msg)
    @if(\Auth::user()->id==$msg->sender_id)
        @php
          $user = DB::table('users')->where('id', $msg->sender_id)->first();         
        @endphp
    {{-- +++++++++++++++++++++++++++++++sender side starts**************************************************  --}}
    <div class="clear-both"></div>    
    <div class="-intro-x chat-text-box flex items-end float-left mb-4">
            <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative mr-4">
                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{$user->image}}" />
            </div>
            <div class="w-full">
                <div>
                    <div class="chat-text-box__content flex items-center float-left">
                        <div class="box leading-relaxed dark:text-gray-300 text-gray-700 px-4 py-3 mt-3">{{$msg->message}}</div>
                        <div class="hidden sm:block dropdown relative ml-3 mt-3">
                            <a href="javascript:;" class="dropdown-toggle w-4 h-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-vertical w-4 h-4"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-corner-up-left w-4 h-4 mr-2"
                                        >
                                            <polyline points="9 14 4 9 9 4"></polyline>
                                            <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                        </svg>
                                        Reply
                                    </a>
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-trash w-4 h-4 mr-2"
                                        >
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>    
                    <div class="clear-both"></div>
                    
                </div>
                <div class="clear-both mb-2"></div>
                <div class="text-gray-600 text-xs">{{\Carbon\Carbon::parse($msg->message_time)->diffForHumans()}}</div>
            </div>
        </div>
        {{-- +++++++++++++++++++++++++++++++sender side ends************************************************** --}}
        @else
       {{-- +++++++++++++++++++++++++++++++receiver side starts************************************************** --}}
       @php
            $user = DB::table('users')->where('id', $msg->sender_id)->first();         
        @endphp
        <div class="clear-both"></div>
        <div class="intro-x chat-text-box flex items-end float-right mb-4">
            <div class="w-full">
                <div>
                    <div class="chat-text-box__content flex items-center float-right">
                        <div class="hidden sm:block dropdown relative mr-3 mt-3">
                            <a href="javascript:;" class="dropdown-toggle w-4 h-4">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="feather feather-more-vertical w-4 h-4"
                                >
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-corner-up-left w-4 h-4 mr-2"
                                        >
                                            <polyline points="9 14 4 9 9 4"></polyline>
                                            <path d="M20 20v-7a4 4 0 0 0-4-4H4"></path>
                                        </svg>
                                        Reply
                                    </a>
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="1"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="feather feather-trash w-4 h-4 mr-2"
                                        >
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box leading-relaxed bg-theme-1 text-opacity-80 text-white px-4 py-3 mt-3">{{$msg->message}}</div>
                    </div>
                    </div>
                <div class="clear-both mb-2"></div>
                <div class="text-gray-600 text-xs text-right"> {{\Carbon\Carbon::parse($msg->message_time)->diffForHumans()}} </div>
            </div>
            <div class="chat-text-box__photo w-10 h-10 hidden sm:block flex-none image-fit relative ml-4">
                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{$user->image}}" />
             </div>
             </div>
       @endif
     @endforeach
    </div>

    @section('js')
    <script>
        var user = {{\Auth::user()->id}};
         var pusher = new Pusher('bc98d41e55d54e29ac4f', {
            cluster: 'ap2'
        });
    
        var channel = pusher.subscribe('chat-channel');
        channel.bind('chat-event-'+user, function(data) {
           @this.render();
        });
    </script>
    @endsection
    