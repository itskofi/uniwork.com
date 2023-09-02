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

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="w-full">
        <div class="max-w-5xl bg-gray-100 mx-auto">
            <div class="flex flex-col space-y-1 p-1">
                <x-home.search-dropdown label="Was" placeholder="Jobtitel, Stichworte oder Unternehmen" />
                <x-home.search-dropdown label="Wo" placeholder="Bundesland, Stadt oder Postleitzahl" />
            </div>
            <div class="p-1">
                <livewire:jobboard/>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
