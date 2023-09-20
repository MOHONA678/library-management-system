<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="bg-white shadow-md sm:rounded-lg w-[400px]">
               
                <div class="mt-6">
                    <a href="/" class="flex items-center justify-center">
                    
                      <img src="{{asset('avater/pic.png')}}" class="w-32 h-32" alt="">
                    </a>
                </div>

                @if (isset($title))
                    {{$title}}
                @endif
                
           
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden ">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
