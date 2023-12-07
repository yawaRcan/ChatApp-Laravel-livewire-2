<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<body>
    






<div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
    <div class="intro-y auth">
        <img class="intro-y mx-auto w-16" alt="Topson Messenger Tailwind HTML Admin Template" src="{{asset('assets/images/logo.svg')}}">
        <div class="intro-y text-gray-700 dark:text-gray-300 text-2xl font-medium text-center mt-16">Register New Account</div>
        <div class="intro-y box px-5 py-8 mt-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf
            <div class="intro-y">
               
                <input type="text" class="form-control py-3 px-4 intro-y auth__input  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
               
                <input type="text" class="form-control py-3 px-4 intro-y auth__input mt-4  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input type="password" class="form-control py-3 px-4 intro-y auth__input mt-4  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                <div class="intro-y w-full grid grid-cols-12 gap-4 h-1 mt-3">
                    <div class="col-span-3 h-full rounded bg-green-500"></div>
                    <div class="col-span-3 h-full rounded bg-green-500"></div>
                    <div class="col-span-3 h-full rounded bg-green-500"></div>
                    <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>
                </div>
                <a href="#" class="intro-y text-gray-600 dark:text-gray-300 block mt-2 text-xs sm:text-sm -mb-1">What is a secure password?</a> 
                <input type="password" class="form-control py-3 px-4 intro-y mt-4" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation">
            </div>
            <div class="intro-x flex items-center text-gray-700 dark:text-gray-600 mt-4 text-xs sm:text-sm">
                <input type="checkbox" class="form-check-input border mr-2" id="remember-me">
                <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                <a class="text-theme-1 dark:text-theme-10 ml-1" href="#">Privacy Policy</a>. 
            </div>
            <div class="intro-y mt-5 xl:mt-8 text-center xl:text-left">
                <button type="submit" class="btn btn-primary intro-y w-full xl:mr-3">
                    {{ __('Register') }}
                </button>
                
            </form>
                <a class="btn btn-outline-secondary intro-y w-full mt-3" href=" {{ route('login')}}">Sign in</a>
            </div>
        </div>
        <div class="intro-y leading-relaxed text-gray-600 dark:text-gray-300 mt-10 text-center xl:text-center">
            By signin up, you agree to our 
            <br>
            <a class="underline" href="#">Terms and Conditions</a> & <a class="underline" href="#">Privacy Policy</a> 
        </div>
    </div>
</div>
<!-- BEGIN: JS Assets-->

<script src="{{asset('assets/js/app.js')}}"></script> 
</body>
</html>