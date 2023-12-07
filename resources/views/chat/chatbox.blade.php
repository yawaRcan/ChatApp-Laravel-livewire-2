<div class="chat-box border-theme-5 col-span-12 xl:col-span-6 flex flex-col overflow-hidden xl:border-l xl:border-r p-6">
    <div class="intro-y box border border-theme-3 dark:bg-dark-2 dark:border-dark-2 flex items-center px-5 py-4">
        <div class="flex items-center mr-auto">
            <div class="w-12 h-12 flex-none image-fit mr-1">
                <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full" src="{{ $user->image ?? asset('assets/images/profile-9.jpg')}}" />
                <div class="bg-green-500 w-3 h-3 absolute right-0 top-0 rounded-full border-2 border-white"></div>
            </div>
            <div class="ml-2 overflow-hidden">
                <a href="javascript:;" class="text-base font-medium"> {{$user->name}} </a>
                <div class="text-gray-600">Online</div>
            </div>
        </div>
        <a class="text-gray-600 hover:text-theme-1" href="#"> <i data-feather="camera" class="w-4 h-4 sm:w-6 sm:h-6"></i> </a>
        <a class="text-gray-600 hover:text-theme-1 ml-2 sm:ml-5" href="#"> <i data-feather="mic" class="w-4 h-4 sm:w-6 sm:h-6"></i> </a>
    </div>
    <div class="overflow-y-scroll scrollbar-hidden pt-5 flex-1">
        @livewire('components.chat-messages', ['id' => $user->id], key($user->id.'chat-messages'))
    </div>
   @livewire('components.chat-frm', ['id' => $user->id], key($user->id))
</div>