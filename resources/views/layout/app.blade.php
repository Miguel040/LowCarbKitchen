<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-100">

    <div class="container mx-auto bg-green-200 p-5 shadow-lg rounded-b-lg">
        <nav class="flex justify-between">
            <div>
                <a href="#">  Logo</a>
            </div>
            <ul class="flex flex-row justify-center">
                <li class="pr-5"><a href="">Beliebte Rezepte</a></li>
                <li class="pr-5"><a href="">Zufälliges Rezept</a></li>
                <li class="pr-5"><a href="">Mein Kochbuch</a></li>

            </ul>

            <ul>
            <li class="pr-5"><a href="">Login</a></li>
            <li class="pr-5"><a href="{{ route('register') }}">Regestrieren</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')

</body>
</html>
    