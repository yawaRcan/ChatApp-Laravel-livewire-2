<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
</head>
<body>
<div class="w-full min-h-screen p-5 md:p-20 flex items-center justify-center">
    <div class="intro-y auth">
        <img class="intro-y mx-auto w-16" alt="Topson Messenger Tailwind HTML Admin Template" src="{{asset('assets/images/logo.svg')}}">
        <div class="intro-y text-gray-700 dark:text-gray-300 text-2xl font-medium text-center mt-16">Login to Your Account!</div>
        <div class="intro-y box px-5 py-8 mt-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="intro-y">
                    <input type="text" class="form-control py-3 px-4 auth__input intro-y @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <input type="password" class="form-control py-3 px-4 auth__input intro-y mt-4  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="intro-y text-gray-600 dark:text-gray-300 flex text-xs sm:text-sm mt-4">
                    <div class="flex items-center mr-auto">
                        <input type="checkbox" id="remember-me" class="form-check-input border mr-2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="cursor-pointer select-none" for="remember-me">Remember me</label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div>
                <div class="intro-y mt-5 xl:mt-8 text-center xl:text-left">
                    <button class="btn btn-primary intro-y w-full xl:mr-3" type="submit">
                        {{ __('Login') }}
                    </button>
                   
                </form>
                    <a class="btn btn-outline-secondary intro-y w-full mt-3" href="{{ route('register')}}">Sign up</a>
                </div>
            
        </div>
    </div>
</div>






<script src="{{asset('assets/js/app.js')}}"></script>   
</body>
</html>