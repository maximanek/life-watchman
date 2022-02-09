<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Life Watchman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('welcome_page.login') }}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">{{ __('welcome_page.register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div>
                    <p class="text-center dark:text-white text-4xl">Frontend Work in Progress</p>
                    <img src="https://c.tenor.com/ePRov4dWE3wAAAAd/looney-tunes-working.gif" alt="">
                    <p class="dark:text-white text-center">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-white underline">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-white underline">{{ __('welcome_page.login') }}</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-white underline">{{ __('welcome_page.register') }}</a>
                                @endif
                            @endauth
                        @endif
                            <br> {{__('welcome_page.lang')}}
                            @foreach (Config::get('languages') as $lang =>  $language)
                                @if ($lang != App::getLocale())
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                @endif
                            @endforeach
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
