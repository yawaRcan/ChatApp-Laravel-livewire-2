@php 
 $conversations = DB::table('conversation')
 ->where('sender_id',\Auth::user()->id)
 ->orWhere('receiver_id', \Auth::user()->id)
 ->where('is_friend', '1')->orderBy('id','DESC')->get();
 
@endphp

<div class="side-content col-span-12 xl:col-span-3 -mt-16 xl:mt-0 pt-20 xl:-mr-6 px-6 xl:pt-6 side-content--active flex-col overflow-hidden" data-content="chats">
    <div class="intro-y text-xl font-medium">Chats</div>
    <div class="intro-y relative mt-5">
        <input type="text" class="form-control box py-3 px-4 border-transparent pr-8" placeholder="Search for messages or users..." />
        <i data-feather="search" class="text-gray-600 w-5 h-5 absolute inset-y-0 right-0 my-auto mr-3"></i>
    </div>
    <div class="intro-y flex-none overflow-x-auto overflow-y-hidden scrollbar-hidden">
        <div class="flex mt-6">
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="John Travolta">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-9.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">John Travolta</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Brad Pitt">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-1.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Brad Pitt</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Leonardo DiCaprio">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-7.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Leonardo DiCaprio</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Sylvester Stallone">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-4.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Sylvester Stallone</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Johnny Depp">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-7.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Johnny Depp</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Russell Crowe">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-15.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Russell Crowe</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Arnold Schwarzenegger">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-13.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Arnold Schwarzenegger</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Sylvester Stallone">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-9.jpg')}}" />
                    <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Sylvester Stallone</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Al Pacino">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-9.jpg')}}" />
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Al Pacino</div>
            </a>
            <a href="#" class="w-12 mr-3 cursor-pointer tooltip" title="Angelina Jolie">
                <div class="w-12 h-12 flex-none image-fit rounded-full">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{asset('assets/images/profile-1.jpg')}}" />
                </div>
                <div class="text-gray-600 dark:text-gray-500 truncate text-center mt-2">Angelina Jolie</div>
            </a>
        </div>
    </div>
    <div class="intro-y text-base font-medium leading-tight mt-3">Recent Chats</div>
    <div class="intro-y overflow-y-auto scrollbar-hidden pt-2 mt-3 -mx-5 px-5">
        @foreach ($conversations as $data)
        @if(\Auth::user()->id!=$data->sender_id)
         @php
          $user = DB::table('users')->where('id', $data->sender_id)->first();         
         @endphp
        <div class="intro-x mt-1">
            <a href="{{route('chat.user',['id'=>$user->id])}}">
            <div class="zoom-in">
                <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 bg-theme-1 dark:bg-theme-1">
                    <div class="w-12 h-12 flex-none image-fit mr-1">
                        <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{$user->image}}" />
                        <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                    </div>
                    <div class="ml-2 overflow-hidden">
                          <a href="{{route('chat.user',['id'=>$user->id])}}" class="font-medium text-white"> 
                             {{$user->name}}
                           </a>
                        <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-white">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="whitespace-nowrap text-opacity-80 text-xs text-white">03:20 PM</div>
                        <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                            <a class="dropdown-toggle block text-opacity-70 text-white" href="javascript:;"> <i data-feather="chevron-down" class="w-6 h-6"></i> </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                    </a>
                                    <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                        <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                </div>
            </div>
          </a>
        </div>
         @else 
            @php 
            $user = DB::table('users')->where('id', $data->receiver_id)->first();
            @endphp
            <div class="intro-x mt-1">
                <a href="{{route('chat.user',['id'=>$user->id])}}">
                <div class="zoom-in">
                    <div class="chat-list box cursor-pointer relative flex items-center px-4 py-3 bg-theme-1 dark:bg-theme-1">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{$user->image}}" />
                            <div class="bg-green-500 border-white w-3 h-3 absolute right-0 bottom-0 rounded-full border-2"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                              <a href="{{route('chat.user',['id'=>$user->id])}}" class="font-medium text-white"> 
                                 {{$user->name}}
                               </a>
                            <div class="text-opacity-80 w-4/5 truncate mt-0.5 text-white">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="whitespace-nowrap text-opacity-80 text-xs text-white">03:20 PM</div>
                            <div class="chat-list__action dropdown transition duration-200 opacity-0 mt-1 -mb-1 -mr-1 ml-auto">
                                <a class="dropdown-toggle block text-opacity-70 text-white" href="javascript:;"> <i data-feather="chevron-down" class="w-6 h-6"></i> </a>
                                <div class="dropdown-menu w-40">
                                    <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                        <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                        </a>
                                        <a href="#" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                            <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme-1 flex items-center justify-center absolute top-0 right-0 text-xs rounded-full font-medium mr-4"></div>
                    </div>
                </div>
                </a>
            </div>
            @endif
        @endforeach
    </div>
</div>