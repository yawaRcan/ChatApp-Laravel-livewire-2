<!DOCTYPE html>
<html lang="en" theme="dark">
    <head>
        <meta charset="utf-8" />
        <link href="{{asset('assets/images/logo.svg')}}" rel="shortcut icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Topson admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities." />
        <meta name="keywords" content="admin template, Topson admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="LEFT4CODE" />
      
        <title>Dashboard - Topson - Tailwind HTML Admin Template</title>
        @livewireStyles
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
       
    </head>
    <body class="main">
        
        @include('layouts.topbar')
        @include('layouts.invite')
        @include('layouts.sent-requests')
        @include('layouts.sidebar')
        <div class="md:pl-16 pt-16">
            <div class="-mt-16 ml-auto xl:-ml-16 mr-auto xl:pl-16 pt-16 xl:h-screen w-auto sm:w-3/5 xl:w-auto grid grid-cols-12 gaps-10">
                @include('chat.conversation') 
                @yield('content')
            </div>
         
        </div>
      

        @livewireScripts
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" integrity="sha512-24XP4a9KVoIinPFUbcnjIjAjtS59PUoxQj3GNVpWc86bCqPuy3YxAcxJrxFCxXe4GHtAumCbO2Ze2bddtuxaRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('js')
        @yield('js2')
    </body>
</html>
