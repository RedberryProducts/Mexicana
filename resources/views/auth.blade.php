<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mexicana | Auth</title>
        <link rel="stylesheet" href="{{ asset('assets/tailwind.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/main.css') }}" />
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon"/>
    </head>
    <body class="bg-main">
        <div class="h-screen flex flex-col space-y-10 justify-center items-center">
            <div class="bg-white w-96 shadow-xl rounded p-5">
              <h1 class="text-3xl font-medium text-center">Mexicana</h1>
              <p class="text-sm text-center">Dashboard Statistics</p>
              
              <form class="space-y-5 mt-5" method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="relative">
                    <input 
                        type="text" 
                        class="w-full h-12 border border-gray-800 rounded px-3" 
                        name="email"
                        placeholder="Email" 
                    />
                    @error('email')
                        <span class="absolute left-0 -bottom-4 text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input 
                        type="password" 
                        class="w-full h-12 border border-gray-800 rounded px-3" 
                        name="password"
                        placeholder="Password" 
                    />
                    @error('password')
                        <span class="absolute left-0 -bottom-4 text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="relative">
                    <button 
                        class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium"
                    >
                        Login
                    </button>
                    @if(isset($invalidCredentials))
                        <span class="left-1/2 transform -translate-x-1/2 absolute -bottom-4 left-0 -bottom-4 text-red-600 text-xs">
                            {{ $invalidCredentials }}
                        </span>
                    @endif
                </div>
              </form>
            </div>
          </div>
    </body>
</html>
