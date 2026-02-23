<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Boleh Dicoba Digital - Digital Marketing Agency')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="icon" href="{{ asset('images/Logobdd2.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('components.header')
    <main>@yield('content')</main>
    @include('components.footer')

    {{-- WhatsApp Float --}}
    <a href="https://api.whatsapp.com/send?phone=6281805757585&text=Halo%20saya%20tau%20BDD%20dari%20Website"
        target="_blank"></a>
</body>

</html>
