<!DOCTYPE html>
<html lang="nl">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Het Luik is de broodjesbar van het Summa College!">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- CSS & JS -->
    @vite('resources/css/app.css')

    <title>{{ $title }}</title>
</head>

<body class="font-inter">
    <x-header></x-header>
    <main class="bg-white">
        {{ $slot }}
    </main>
    <x-footer></x-footer>
</body>

</html>
