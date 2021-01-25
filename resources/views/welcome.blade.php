<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

        @livewireStyles
    </head>
    <body>
        @php
            $count = 2;

            $data = [
                'titulo' => 'Laravel livewire',
                'description' => 'Un curso'
            ]
        @endphp

        <livewire:types/>

        @livewireScripts
    </body>
</html>
