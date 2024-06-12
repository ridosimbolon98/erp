<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')

    </head>
    <body>
        <div class="my-3 bg-red-500 p-5 rounded-md shadow-md">
            <h3 class="text-white text-xl">Hello Laravel</h3>
        </div>
    </body>
</html>
