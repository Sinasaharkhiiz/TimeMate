<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
            <!-- فونت فارسی Vazirmatn -->


        <!--link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /-->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
              <style>
           @font-face {
    font-family: "Yekan";
    src: url(includes/fonts/Yekan.eot);
    src: url(includes/fonts/Yekan.eot?#iefix) format("embedded-opentype"),
         url(includes/fonts/Yekan.woff) format("woff"),
         url(includes/fonts/Yekan.ttf) format("truetype"),
         url(includes/fonts/Yekan.svg#BYekan) format("svg");
    font-weight: normal;
    font-style: normal
}
      </style>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
