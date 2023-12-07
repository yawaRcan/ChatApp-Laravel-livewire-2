<div class="top-bar top-0 left-0 fixed w-full h-16">
    <div class="-intro-y top-bar__content bg-white border-theme-3 dark:bg-dark-2 dark:border-dark-2 border-b w-full h-full flex px-5">
        <a class="hidden md:flex items-center h-full mr-auto" href="http://localhost/page/dashboard">
            <img alt="Topson Messenger Tailwind HTML Admin Template" class="h-8" src="{{asset('assets/images/logo.svg')}}" />
            <div class="text-base font-light ml-4"><span class="font-medium">Topson</span> Messenger</div>
        </a>
        <a class="mobile-menu-toggler flex md:hidden items-center h-full mr-auto px-5 -ml-5" href="javascript:;"> <i data-feather="bar-chart-2" class="w-5 h-5 transform rotate-90"></i> </a>
        <div class="h-full flex items-center">
            <div class="mr-3">Dark Mode</div>
            <input class="form-check-switch" type="checkbox" id="dark-mode-switcher" />
        </div>
        <div class="hidden md:flex items-center px-5"><a href="javascript:;" data-toggle="modal" data-target="#invite-friends-modal" class="btn btn-primary">Invite Friendsa</a></div>
        <div class="hidden md:flex items-center">
            <a href="javascript:;" data-toggle="modal" data-target="#sent-requests-modal" class="btn btn-info"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users w-5 h-5 mx-auto"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
            </a>
        </div>
        &nbsp;
        &nbsp;

        <div class="notification-dropdown dropdown">
            <a
                href="javascript:;"
                class="notification-dropdown__toggler text-gray-600 border-theme-7 dark:border-dark-4 dark:text-gray-300 dropdown-toggle h-full flex items-center px-5 relative -mr-3 md:mr-0 md:border-l md:border-r"
            >
                <div class="relative">
                    <i data-feather="bell" class="w-5 h-5"></i>
                    <div class="w-2 h-2 bg-theme-1 text-white flex items-center justify-center absolute -mt-0.5 top-0 right-0 rounded-full"></div>
                </div>
            </a>
            <div class="notification-dropdown__content dropdown-menu">
                <div class="dropdown-menu__content box dark:bg-dark-2 px-4 pt-4 pb-5">
                    <div class="text-base font-medium leading-tight mb-4">Notifications</div>
                      @livewire('components.notifications',  key('topbar-notifications'))  
                </div>
            </div>
        </div>
        <div class="account-dropdown dropdown relative">
            <a href="javascript:;" class="h-full dropdown-toggle flex items-center pl-5">
                <div class="w-8 h-8 image-fit">
                    <img alt="Topson Messenger Tailwind HTML Admin Template" class="rounded-full shadow-md" src="{{\Auth::user()->image}}" />
                </div>
                <div class="hidden md:block ml-3">
                    <div class="w-28 truncate font-medium leading-tight">{{\Auth::user()->name}}</div>
                    <div class="account-dropdown__info text-xs text-gray-600"> {{\Auth::user()->about}} </div>
                </div>
            </a>
            <div class="dropdown-content dropdown-menu absolute w-56 top-0 right-0 z-20">
                <div class="dropdown-menu__content box dark:bg-dark-2">
                    <div class="p-2">
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                        <a href="#" class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                    </div>
                    <div class="border-gray-200 dark:border-dark-4 p-2 border-t">
                        <a  class="flex items-center block p-2 transition duration-300 ease-in-out rounded-md hover:bg-gray-200 dark:hover:bg-dark-3" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                      
                          <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                             
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>